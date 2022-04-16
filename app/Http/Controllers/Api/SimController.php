<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use App\Models\Sim;
use App\Models\Student;
use Illuminate\Support\Facades\File;


class SimController extends Controller
{
    use ApiResponse;

    public function index(){
        $data = Sim::all();
        return $this->success(['sim'=>$data],'Data Sim');
    }
    public function show($id){
        $data = Sim::find($id);
        return $this->success(['sim'=>$data],'Data Sim');
    }
    public function store(Request $request){
        // dd($request->user()->userable_id);
        $request->validate([
            'foto_selfie_sim'=>'required|image',
            'nis'=>'required|exists:m_student,nis',
        ]);
        $image = $request->file('foto_selfie_sim');
        $type = $image->extension();
        $selfie_sim = $request->nis.'_selfie_sim.'.$type;
        $file_endpoint = url('/api/sim/image/'.$request->nis);
        $res = Sim::create([
            'nis'=>$request->nis,
            'foto_selfie_sim'=>$selfie_sim,
            'file_endpoint'=>$file_endpoint,
        ]);
        $request->file('foto_selfie_sim')->move(public_path('image/sim'),$selfie_sim);
        return $this->success(['sim'=>$res],'Data Sim Tersimpan');
    }
    public function update(Request $request,$id){
        $request->validate([
            'foto_selfie_sim'=>'required|image',
            'nis'=>'required|exists:m_student,nis',
        ]);
        $image = $request->file('foto_selfie_sim');
        $type = $image->extension();
        $selfie_sim = $request->nis.'_selfie_sim.'.$type;
        $file_endpoint = url('/api/sim/image/'.$request->nis);
        $res = Sim::where('id',$id)->update([
            'nis'=>$request->nis,
            'foto_selfie_sim'=>$selfie_sim,
            'file_endpoint'=>$file_endpoint,
        ]);
        $request->file('foto_selfie_sim')->move(public_path('image/sim'),$selfie_sim);
        return $this->success(['sim'=>$res],'Data Sim Berhasil Di Update');
    }
    public function delete(Request $request,$id){
        $data = Sim::where('id',$id)->delete();
        return $this->success(['sim'=>$data],'Data Sim Berhasil Di Delete');
    }
    public function getImage($nis){
        $sim = Sim::where('nis',$nis)->first();
        $image = $sim['foto_selfie_sim'];
        if ($image==null) {
           $response = $this->error('image not found',404,'request id is wrong, or image had been remove');
        }

        elseif($image!=null){
            $path  = public_path('/image/sim/'.$image);
            if (File::exists($path)) {
                $file = File::get($path);
                $type = File::mimeType($path);

                $response = response($file, 200)->header('Content-type',$type);
            }
            else{
                $response = $this->error('image not found',404,'request id is wrong, or image had been remove');
            }
        }
        return $response;
    }
}
