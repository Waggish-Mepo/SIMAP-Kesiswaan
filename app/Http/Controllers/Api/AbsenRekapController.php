<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Rekap_Absen;
use App\Models\Periode_Absen;

class AbsenRekapController extends Controller
{
    use ApiResponse;
    public function index(){
        $data = Rekap_Absen::with('Murid')->get();
        return $this->success(['rekap_absen'=>$data],'Data Rekap Absen');
    }
    public function show($id){
        $data = Rekap_Absen::with('Murid')->where('id',$id)->orWHere('nis',$id)->first();
        return $this->success(['rekap_absen'=>$data],'Data Rekap Absen');
    }
    public function store(Request $request){
        $request->validate([
            'awal'=>'required',
            'akhir'=>'required',
        ]);
        dd($request->all());
        $del = Rekap_Absen::get()->delete();
        $periode = Periode_Absen();
        $murid = Student::get();
        foreach ($murid as $key => $value) {

        }
        $data = Rekap_Absen::create([
            'nis'=>$request->nis,
            'sakit'=>$request->sakit,
            'ijin'=>$request->ijin,
            'alpa'=>$request->alpa,
            'semester'=>$request->semester,
            'angkatan'=>$request->angkatan,
        ]);
        return $this->success(['rekap_absen'=>$data],'Data Rekap Absen Berhasil Tersimpan');
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
        $data = Rekap_Absen::where('id',$id)->update([
            'nis'=>$request->nis,
            'sakit'=>$request->sakit,
            'ijin'=>$request->ijin,
            'alpa'=>$request->alpa,
            'semester'=>$request->semester,
            'angkatan'=>$request->angkatan,
        ]);
        return $this->success(['rekap_absen'=>$data],'Data Rekap Absen Berhasil Di Update');
    }
    public function delete(Request $request,$id){
        $data = Rekap_Absen::where('id',$id)->delete();
        return $this->success(['eekap_absen'=>$data],'Data Rekap Absen');
    }
}
