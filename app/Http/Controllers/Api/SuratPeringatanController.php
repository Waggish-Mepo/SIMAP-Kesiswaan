<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Surat_Perigatan;
use App\Http\Traits\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SuratPeringatanController extends Controller
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
        $res = Surat_Perigatan::with('Student', 'Student.Rayon', 'Student.Rombel')->get();
        return view('surat.peringatan.index')->with('data',$res)->with('student_nis',$student_nis);
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
            'sp_ke' => 'required',
            'tgl' => 'required',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            // return $this->error('Validation Error', 300, $validator->errors());
            alert()->error('Gagal','Data Gagal Disimpan');
        }

        Surat_Perigatan::create([
            'nis' => $request['nis'],
            'sp_ke' => $request['sp_ke'],
            'tgl' => $request['tgl'],
            'status' => 0,
            'ket' => $request['ket']
        ]);

        alert()->success('Berhasil','Data Berhasil Disimpan');

        return redirect('/surat/peringatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = Surat_Perigatan::with('Student', 'Student.Rayon', 'Student.Rombel')->where('id', $id)->get();

        return $this->success(['surat_peringatan' => $res], 'Surat Peringatan');
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
        $res = Surat_Perigatan::find($id);

        $validator = Validator::make($request->all(), [
            'nis' => 'required',
            'sp_ke' => 'required',
            'tgl' => 'required',
            'skor' => 'required',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            alert()->error('Gagal','Data Gagal disimpan');
        }

        $res->update([
            'nis' => $request['nis'],
            'sp_ke' => $request['sp_ke'],
            'tgl' => $request['tgl'],
            'ket' => $request['ket']
        ]);

        alert()->success('Berhasil','Data Berhasil Diupdate');

        return redirect('/surat/peringatan');
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
            $res = Surat_Perigatan::find($id);

            $res->delete();
        } catch (\Throwable $th) {
            alert()->error('Gagal','Data Gagal Dihapus');
        }
        alert()->success('Berhasil','Data Berhasil Dihapus');

        return redirect('/surat/peringatan');
    }

    public function proses($id)
    {
        $data = Surat_Perigatan::find($id);
        
        $data->update([
            'status'=> 1,
        ]);

        alert()->success('Berhasil','Data Berhasil Diproses');

        return redirect('/surat/peringatan');

    }
}
