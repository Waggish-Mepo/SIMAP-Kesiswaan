<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Mapel;
use App\Models\Rayon;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
// use App\Exports\BooksExport;
use App\Http\Traits\ApiResponse;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentProfileImport;

class TeacherController extends Controller
{
    use ApiResponse;

    public function index(){
        $data = Teacher::with('Rayon')->get();
        $mapel = Mapel::all();
        return view('master-data.guru.guru', compact('data', 'mapel' ));
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
            alert()->error('Gagal','Data Gagal Disimpan');
        }
        alert()->success('Berhasil','Data Berhasil Disimpan');

        return redirect('/guru');
    }
    public function update(Request $request,$id){
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'no_induk_yayasan'=>'required',
            'jk'=>'required',
            'mata_pelajaran'=>'required',
        ]);
        $guru = Teacher::find($id);
        try {
            $res = $guru->update([
                'nama'=>$request->nama,
                'email'=>$request->email,
                'no_hp'=>$request->no_hp,
                'no_induk_yayasan'=>$request->no_induk_yayasan,
                'jk'=>$request->jk,
                'mata_pelajaran'=>$request->mata_pelajaran,
            ]);
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Disimpan');
        }
        alert()->success('Berhasil','Data Berhasil Disimpan');

        return redirect('/guru');
    }
    public function destroy($id){
        try {
            $data = Teacher::find($id);
            $data->delete();
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Dihapus');
        }
        alert()->success('Berhasil','Data Berhasil Dihapus');

        return redirect('/guru');
    }
    // public function importExcel(Request $request){
    //     $request->validate([
    //         'file'=>'required|mimes:csv,xlsx,xls'
    //     ]);
    //     $res = Excel::import(new TeacherProfileImport(), request()->file('file'));
    //     return $this->success(['guru'=>$res],'Data Guru Berhasil DI Import');
    // }
}
