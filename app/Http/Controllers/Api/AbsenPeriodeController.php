<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Periode_Absen;
use App\Imports\AbsenImport;
use Maatwebsite\Excel\Facades\Excel;
class AbsenPeriodeController extends Controller
{
    use ApiResponse;
    public function index(){
        $data = Periode_Absen::with('Murid')->get();
        return $this->success(['periode_absen'=>$data],'Data Absen');
    }
    public function show($id){
        $data = Periode_Absen::with('Murid')->where('id',$id)->orWHere('nis',$id)->first();
        return $this->success(['periode_absen'=>$data],'Data Absen');
    }
    public function store(Request $request){
        $request->validate([
            'nis'=>'required|exists:m_student,nis',
            'rombel' => 'required|exists:m_rombel,rombel',
            'tanggal'=>'required',
        ]);
        $data = Periode_Absen::create([
            'nis'=>$request->nis,
            'rombel'=>$request->rombel,
            'tanggal'=>$request->tanggal,
        ]);
        return $this->success(['periode_absen'=>$data],'Data Absen Berhasil Tersimpan');
    }
    public function update(Request $request,$id){
        $request->validate([
            'nis'=>'required|exists:m_student,nis',
            'sakit'=>'required',
            'ijin'=>'required',
            'alpa'=>'required',
            'semester'=>'required',
            'angkatan'=>'required|exists:m_batch,angkatan',
        ]);
        $data = Periode_Absen::where('id',$id)->update([
            'nis'=>$request->nis,
            'sakit'=>$request->sakit,
            'ijin'=>$request->ijin,
            'alpa'=>$request->alpa,
            'semester'=>$request->semester,
            'angkatan'=>$request->angkatan,
        ]);
        return $this->success(['periode_absen'=>$data],'Data Absen Berhasil Di Update');
    }
    public function delete(Request $request,$id){
        $data = Periode_Absen::where('id',$id)->delete();
        return $this->success(['periode_absen'=>$data],'Data Absen');
    }
    public function importExcel(Request $request){
        try {
            $request->validate([
                'file'=>'required|mimes:csv,xlsx,xls'
            ]);
            $res = Excel::import(new AbsenImport(), request()->file('file'));
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Dihapus');
        }
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect('/absen/kehadiran');
    }
}
