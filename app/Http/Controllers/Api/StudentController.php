<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Batch;
// use App\Exports\BooksExport;
use App\Imports\StudentProfileImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    use ApiResponse;

    public function index(){
        $murid = Student::with('Rombel.Batch')->with('Rayon')->get();
        $rayon = Rayon::all();
        $rombel = Rombel::with('Batch')->get();
        return view('master-data.murid.murid')->with('murid',$murid)->with('rayon',$rayon)->with('rombel',$rombel);
    }
    public function show($id){
        $res = Student::where('id',$id)->orWhere('nis',$id)->orWhere('nisn',$id)->orWhere('nama',$id)->orWhere('nik')->with('Rombel.Batch')->with('Rayon')->first();
        return $this->success(['murid'=>$res],'Data Murid');
    }
    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'rayon'=>'required|exists:m_rayon,id',
            'rombel'=>'required|exists:m_rombel,id',
            'jenis_kelamin'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'nis'=>'required',
            'nisn'=>'required',
            'nik'=>'required',
        ]);
        try {
            $res = Student::create([
                'nama'=>$request->nama,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'email'=>$request->email,
                'no_hp'=>$request->no_hp,
                'nis'=>$request->nis,
                'nisn'=>$request->nisn,
                'nik'=>$request->nik,
                'rayon_id'=>$request->rayon,
                'rombel_id'=>$request->rombel,
            ]);
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Disimpan');
        }

        alert()->success('Berhasil','Data Berhasil Disimpan');
        return redirect('/murid');
    }
    public function update(Request $request,$id){
        $request->validate([
            'nama'=>'required',
            'rayon'=>'required|exists:m_rayon,id',
            'rombel'=>'required|exists:m_rombel,id',
            'jenis_kelamin'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'nis'=>'required',
            'nisn'=>'required',
            'nik'=>'required',
        ]);
        // $rombel = Rombel::where('rombel',$request->rombel)->first();
        // $angkatan = Batch::where('angkatan',$request->angkatan)->first();
        // $rayon = Rayon::where('rayon',$request->rayon)->where('angkatan_id',$angkatan->id)->first();
        $student = Student::find($id);
        try {
            $res = $student->update([
                'nama'=>$request->nama,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'email'=>$request->email,
                'no_hp'=>$request->no_hp,
                'nis'=>$request->nis,
                'nisn'=>$request->nisn,
                'nik'=>$request->nik,
                'rayon_id'=>$request->rayon,
                'rombel_id'=>$request->rombel,
            ]);
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Diupdate');
        }
        alert()->success('Berhasil','Data Berhasil Diupdate');
        return redirect('/murid');
    }
    public function destroy($id){
        try {
            $data = Student::find($id);
            $data->delete();
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Dihapus');
        }
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect('/murid');
    }
    public function importExcel(Request $request){
        try {
            $request->validate([
                'file'=>'required|mimes:csv,xlsx,xls'
            ]);
            $res = Excel::import(new StudentProfileImport(), request()->file('file'));
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Dihapus');
        }
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect('/murid');
    }
}
