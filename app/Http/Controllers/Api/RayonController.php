<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use App\Models\Rayon;
use App\Models\Teacher;

class RayonController extends Controller
{
    use ApiResponse;
    public function index(){
        $data = Rayon::all();
        return $this->success(['rayon'=>$data],'Data rayon');
    }
    public function show($id){
        $data = Rayon::find($id);
        return $this->success(['rayon'=>$data],'Data Rayon');
    }
    public function store(Request $request){
        $request->validate([
            'rayon'=>'required|unique:m_rayon,rayon',
            'no_induk_yayasan'=>'required',
        ]);
        $pembimbing_rayon = Teacher::where('no_induk_yayasan',$request->no_induk_yayasan)->FirstOrFail();
        $data = Rayon::create([
            'rayon'=>$request->rayon,
            'teacher_id'=>$pembimbing_rayon['id'],
        ]);
        alert()->success('Berhasil','Data Berhasil Disimipan');

        return redirect('/data-sekolah');
    }
    public function update(Request $request,$id){
        $request->validate([
            'rayon'=>'required',
            'no_induk_yayasan'=>'required',
        ]);
        // dd($request->all());
        $pembimbing_rayon = Teacher::where('no_induk_yayasan',$request->no_induk_yayasan)->FirstOrFail();
        $data = Rayon::find($id)->update([
            'rayon'=>$request->rayon,
            'teacher_id'=>$pembimbing_rayon['id'],
        ]);
        alert()->success('Berhasil','Data Berhasil Diupdate');

        return redirect('/data-sekolah');
    }
    public function destroy(Request $request,$id){
        $data = Rayon::where('id',$id)->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');

        return redirect('/data-sekolah');
    }
}
