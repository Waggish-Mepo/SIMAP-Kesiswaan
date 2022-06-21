<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Rombel;
use App\Models\Batch;

class RombelController extends Controller
{
    use ApiResponse;
    public function index(){
        $data = Rombel::all();
        return $this->success(['rombel'=>$data],'Data rombel');
    }
    public function show($id){
        $data = Rombel::find($id);
        return $this->success(['rombel'=>$data],'Data rombel');
    }
    public function store(Request $request){
        $request->validate([
            'rombel'=>'required|unique:m_rombel,rombel',
            'angkatan_id'=>'required',
            'kompetensi'=>'required',
        ]);
        // $angkatan = Batch::where('angkatan',$request->angkatan)->FirstOrFail();
        Rombel::create([
            'rombel'=>$request->rombel,
            'angkatan_id'=>$request->angkatan_id,
            'kompetensi'=>$request->kompetensi,
        ]);
        alert()->success('Berhasil','Data Berhasil Disimipan');

        return redirect('/data-sekolah');
    }
    public function update(Request $request,$id){
        $request->validate([
            'rombel'=>'required',
            'angkatan'=>'required',
            'kompetensi'=>'required',
        ]);
        $angkatan = Batch::where('angkatan',$request->angkatan)->FirstOrFail();
        $data = Rombel::find($id)->update([
            'rombel'=>$request->rombel,
            'angkatan_id'=>$angkatan['angkatan'],
            'kompetensi'=>$request->kompetensi,
        ]);
        alert()->success('Berhasil','Data Berhasil Diupdate');

        return redirect('/data-sekolah');
    }
    public function destroy(Request $request,$id){
        Rombel::where('id',$id)->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        // return $this->success(['rombel'=>$data],'Data rombel');
        return redirect()->back();
    }
}
