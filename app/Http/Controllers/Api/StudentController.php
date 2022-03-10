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
        $res = Student::with('Rombel.Batch')->with('Rayon')->get();
        return $this->success(['murid'=>$res],'Data Murid');
    }
    public function show($id){
        $res = Student::where('id',$id)->orWhere('nis',$id)->orWhere('nisn',$id)->orWhere('nama',$id)->orWhere('nik')->with('Rombel.Batch')->with('Rayon')->first();
        return $this->success(['murid'=>$res],'Data Murid');
    }
    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'rayon'=>'required|exists:m_rayon,rayon',
            'rombel'=>'required|exists:m_rombel,rombel',
            'angkatan'=>'required|exists:m_batch,angkatan',
            'jenis_kelamin'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'nis'=>'required',
            'nisn'=>'required',
            'nik'=>'required',
        ]);
        $angkatan = Batch::where('angkatan',$request->angkatan)->first();
        $rombel = Rombel::where('rombel',$request->rombel)->where('angkatan_id',$angkatan['id'])->first();
        $rayon = Rayon::where('rayon',$request->rayon)->first();
        $res = Student::create([
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'nis'=>$request->nis,
            'nisn'=>$request->nisn,
            'nik'=>$request->nik,
            'rayon_id'=>$rayon['id'],
            'rombel_id'=>$rombel['id'],
        ]);
        return $this->success(['murid'=>$res],'Data Murid Berhasil Di Simpan');
    }
    public function update(Request $request,$id){
        $request->validate([
            'nama'=>'required',
            'rayon'=>'required|exists:m_rayon,rayon',
            'rombel'=>'required|exists:m_rombel,rombel',
            'angkatan'=>'required|exists:m_batch,angkatan',
            'jenis_kelamin'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'nis'=>'required',
            'nisn'=>'required',
            'nik'=>'required',
        ]);
        $rombel = Rombel::where('rombel',$request->rombel)->first();
        $angkatan = Batch::where('angkatan',$request->angkatan)->first();
        $rayon = Rayon::where('rayon',$request->rayon)->where('angkatan_id',$angkatan['id'])->first();
        $student = Student::find($id);
        $res = $student->update([
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'nis'=>$request->nis,
            'nisn'=>$request->nisn,
            'nik'=>$request->nik,
            'rayon_id'=>$rayon['id'],
            'rombel_id'=>$rombel['id'],
        ]);
        return $this->success(['murid'=>$res],'Data Murid Berhasil Di Update');
    }
    public function destroy($id){
        $data = Student::find($id);
        $data->delete();
        return $this->success(['murid'=>$data],'Data Murid Berhasil Di Delete');
    }
    public function importExcel(Request $request){
        $request->validate([
            'file'=>'required|mimes:csv,xlsx,xls'
        ]);
        $res = Excel::import(new StudentProfileImport(), request()->file('file'));
        return $this->success(['murid'=>$res],'Data Murid Berhasil DI Import');
    }
}
