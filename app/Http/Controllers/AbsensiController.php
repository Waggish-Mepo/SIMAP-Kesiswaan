<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mapel;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use App\Models\Rekap_Absen;
use App\Imports\AbsenImport;
use Illuminate\Http\Request;
use App\Models\Periode_Absen;
use Maatwebsite\Excel\Facades\Excel;

class AbsensiController extends Controller
{
    public function index(Request $request){
        if($request->has("periode")){
            $selected_tabs = "periode";
        }elseif($request->has("rekap")){
            $selected_tabs = "rekap";
        }
        $periode = Periode_Absen::query();
        $periode->where('tanggal_absen', Carbon::now()->format('Y-m-d'))->with('Murid', 'Murid.Rombel');
        $periode->when($request->rayon != null, function ($q) use($request){
            return $q->whereHas('Murid',function ($q) use ($request){
                return $q->whereHas("Rayon",function ($q) use ($request){
                    return $q->where("rayon",$request->rayon);
                });
            });
        });
        $periode->when($request->rombel != null, function ($q) use($request){
            return $q->whereHas('Murid',function ($q) use ($request){
                return $q->whereHas("Rombel",function ($q) use ($request){
                    return $q->where("rombel",$request->rombel);
                });
            });
        });
        $periode->when($request->mapel != null, function ($q) use($request){
            return $q->where('mapel',$request->mapel);
        });
        $data = $periode->get();
        $rekap_absen = Rekap_Absen::query();
        $rekap_absen->with('Murid', 'Murid.Rombel', 'Murid.Rombel.Batch');
        $rekap_absen->when($request->rombel_rekap != null, function ($q) use($request){
            return $q->whereHas('Murid',function ($q) use ($request){
                return $q->whereHas("Rombel",function ($q) use ($request){
                    return $q->where("rombel",$request->rombel_rekap);
                });
            });
        });
        $rekap_absen->when($request->rayon_rekap != null, function ($q) use($request){
            return $q->whereHas('Murid',function ($q) use ($request){
                return $q->whereHas("Rayon",function ($q) use ($request){
                    return $q->where("rayon",$request->rayon_rekap);
                });
            });
        });
        $rekap_absen->when($request->semester != null, function ($q) use($request){
            return $q->where('semester',$request->semester);
        });
        $rekap_absen = $rekap_absen->get();
        $rombel = Rombel::all();
        $rayon = Rayon::all();
        $mapel = Mapel::all();
        // dd($rombel);
        return view('kehadiran.input-kehadiran', compact(['data', 'rekap_absen', 'rombel', 'rayon', 'selected_tabs', 'mapel']));
    }

    public function importExcel(Request $request){
        $request->validate([
            'file'=>'required|mimes:csv,xlsx,xls'
        ]);
        $res = Excel::import(new AbsenImport(), request()->file('file'));
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect('/absen/kehadiran?periode');
    }
    public function rekap(Request $request){
        $request->validate([
            'awal'=>'required',
            'akhir'=>'required',
            'semester'=>'required',
        ]);
        // dd($request->all());
        $del = Rekap_Absen::truncate();
        $murid = Student::get();
        foreach ($murid as $key => $value) {
            $sakit = 0;
            $ijin = 0;
            $alpa = 0;
            $hadir = 0;
            $dataAbsen = Periode_Absen::whereBetween('tanggal_absen', [$request->awal, $request->akhir])->where('nis',$value->nis)->where('ket','<>','hadir')->get();
            foreach ($dataAbsen as $key => $v) {
                if($v->ket == "izin"){
                    $ijin++;
                }elseif($v->ket == "sakit"){
                    $sakit++;
                }elseif($v->ket == "alpa"){
                    $alpa++;
                } elseif($v->ket == "hadir"){
                    $hadir++;
                }
            }
            Rekap_Absen::create([
                'nis'=>$value->nis,
                'hadir'=>$hadir,
                'sakit'=>$sakit,
                'izin'=>$ijin,
                'alpa'=>$alpa,
                'semester'=>$request->semester,
            ]);
        }
        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = Periode_Absen::find($id);
        $data->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect('/absen/kehadiran');
    }

    public function download_excel()
    {
        $path = public_path('excel/import-absen.xlsx');
        return response()->download($path);
    }
}
