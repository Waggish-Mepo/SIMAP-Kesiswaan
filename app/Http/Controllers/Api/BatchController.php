<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Batch;

class BatchController extends Controller
{
    use ApiResponse;
    public function index(){
        $data = Batch::all();
        return $this->success(['angkatan'=>$data],'Data Angkatan');
    }
    public function show($id){
        $data = Batch::find($id);
        return $this->success(['angkatan'=>$data],'Data Angkatan');
    }
    public function store(Request $request){
        $request->validate([
            'angkatan'=>'required|unique:m_batch,angkatan'
        ]);
        $data = Batch::create([
            'angkatan'=>$request->angkatan,
        ]);
        return $this->success(['angkatan'=>$data],'Data Angkatan');
    }
    public function update(Request $request,$id){
        $request->validate([
            'angkatan'=>'required|unique'
        ]);
        $data = Batch::where('id',$id)->update([
            'angkatan'=>$request->angkatan,
        ]);
        return $this->success(['angkatan'=>$data],'Data Angkatan');
    }
    public function delete(Request $request,$id){
        $data = Batch::where('id',$id)->delete();
        return $this->success(['angkatan'=>$data],'Data Angkatan');
    }
}
