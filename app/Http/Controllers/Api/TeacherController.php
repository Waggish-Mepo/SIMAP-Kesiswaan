<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Rayon;
use App\Http\Traits\ApiResponse;
// use App\Exports\BooksExport;
use App\Imports\StudentProfileImport;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    use ApiResponse;

    public function index(){
        $res = Teacher::with('Rayon')->get();
        return view('master-data.guru')->with('guru',$res);
    }
    public function show($id){
        $res = Student::where('id',$id)->orWhere('no_induk_yayasan',$id)->orWhere('nama',$id)->orWhere('nik')->with('Rayon')->first();
        return $this->success(['guru'=>$res],'Data Guru');
    }
    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'no_induk_yayasan'=>'required',
            'jk'=>'required',
            'mata_pelajaran'=>'required',
        ]);
        try {
            $res = Teacher::create([
                'nama'=>$request->nama,
                'email'=>$request->email,
                'no_hp'=>$request->no_hp,
                'no_induk_yayasan'=>$request->no_induk_yayasan,
                'jk'=>$request->jk,
                'mata_pelajaran'=>$request->mata_pelajaran,
            ]);
        } catch (\Throwable $th) {
            alert()->error('gagal','data gagal disimpanan');
        }
        alert()->success('berhasil','data berhasil disimpanan');

        return redirect('/guru');
    }
    public function update(Request $request,$id){
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'nuptk'=>'required',
            'nik'=>'required',
            'no_induk_yayasan'=>'required',
            'no_ukg'=>'required',
            'jk'=>'required',
            'mata_pelajaran'=>'required',
        ]);
        $guru = Teacher::find($id);
        $res = $guru->update([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'nuptk'=>$request->nuptk,
            'nik'=>$request->nik,
            'no_induk_yayasan'=>$request->no_induk_yayasan,
            'no_ukg'=>$request->no_ukg,
            'jk'=>$request->jk,
            'mata_pelajaran'=>$request->mata_pelajaran,
        ]);
        return $this->success(['guru'=>$res],'Data Guru Berhasil Di Simpan');
    }
    public function destroy($id){
        $data = Teacher::find($id);
        $data->delete();
        return $this->success(['guru'=>$data],'Data Guru Berhasil Di Delete');
    }
    public function importExcel(Request $request){
        $request->validate([
            'file'=>'required|mimes:csv,xlsx,xls'
        ]);
        $res = Excel::import(new TeacherProfileImport(), request()->file('file'));
        return $this->success(['guru'=>$res],'Data Guru Berhasil DI Import');
    }
}
