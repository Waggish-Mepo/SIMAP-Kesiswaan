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
            'angkatan'=>'required',
            'kompetensi'=>'required',
        ]);
        $angkatan = Batch::where('angkatan',$request->angkatan)->FirstOrFail();
        $data = Rombel::create([
            'rombel'=>$request->rombel,
            'angkatan_id'=>$angkatan['angkatan'],
            'kompetensi'=>$request->kompetensi,
        ]);
        return $this->success(['rombel'=>$data],'Data rombel');
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
        return $this->success(['rombel'=>$data],'Data rombel');
    }
    public function delete(Request $request,$id){
        $data = Rombel::where('id',$id)->delete();
        return $this->success(['rombel'=>$data],'Data rombel');
    }
}
