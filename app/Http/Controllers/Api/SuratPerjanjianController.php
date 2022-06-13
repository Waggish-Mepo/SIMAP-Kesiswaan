<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use App\Models\Surat_Perjanjian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SuratPerjanjianController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_nis = Student::all();
        $res = Surat_Perjanjian::with('Student', 'Student.Rayon', 'Student.Rombel')->get();
        return view('surat.perjanjian.index')->with('data',$res)->with('student_nis',$student_nis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nis' => 'required',
            'tgl' => 'required',
            'status' => 'required',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            // return $this->error('Validation Error', 300, $validator->errors());
            alert()->error('Gagal','Data Gagal Disimpan');
        }

        try {
            $res = Surat_Perjanjian::create([
                'nis' => $request['nis'],
                'tgl' => $request['tgl'],
                'status' => 0,
                'ket' => $request['ket']
            ]);
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Disimpan');
        }
        alert()->success('Berhasil','Data Berhasil Disimpan');

        return redirect('/surat/perjanjian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = Surat_Perjanjian::with('Student', 'Student.Rayon', 'Student.Rombel')->where('id', $id)->get();

        return $this->success(['surat_perjanjian' => $res], 'Surat Perjanjian');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = Surat_Perjanjian::find($id);

        $validator = Validator::make($request->all(), [
            'nis' => 'required',
            'tgl' => 'required',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            alert()->error('Gagal','Data Gagal Disimpan');
        }

        $res->update([
            'nis' => $request['nis'],
            'tgl' => $request['tgl'],
            'ket' => $request['ket']
        ]);

        alert()->success('Berhasil','Data Berhasil Disimpan');

        return redirect('/surat/perjanjian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $res = Surat_Perjanjian::find($id);

            $res->delete();
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal DiHapus');
        }
        alert()->success('Berhasil','Data Berhasil Dihapus');

        return redirect('/surat/perjanjian');
    }

    public function proses($id)
    {
        $data = Surat_Perjanjian::find($id);
        
        $data->update([
            'status'=> 1,
        ]);

        alert()->success('Berhasil','Data Berhasil Diproses');

        return redirect('/surat/perjanjian');

    }
}
