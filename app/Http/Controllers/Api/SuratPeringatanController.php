<?php

namespace App\Http\Controllers\Api;

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
        $res = Surat_Perigatan::with('Student', 'Student.Rayon', 'Student.Rombel')->get();

        return $this->success(['surat_peringatan' => $res], 'Surat Peringatan');
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
            'skor' => 'required',
            'status' => 'required',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Validation Error', 300, $validator->errors());
        }

        $res = Surat_Perigatan::create([
            'nis' => $request['nis'],
            'sp_ke' => $request['sp_ke'],
            'tgl' => $request['tgl'],
            'skor' => $request['skor'],
            'status' => $request['status'],
            'ket' => $request['ket']
        ]);

        return $this->success(['surat_peringatan' => $res], 'Surat peringatan created successfully');
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
            'status' => 'required',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Validation Error', 300, $validator->errors());
        }

        $res->update([
            'nis' => $request['nis'],
            'sp_ke' => $request['sp_ke'],
            'tgl' => $request['tgl'],
            'skor' => $request['skor'],
            'status' => $request['status'],
            'ket' => $request['ket']
        ]);

        return $this->success(['surat_peringatan' => $res], 'Surat peringatan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Surat_Perigatan::find($id);

        $res->delete();

        return $this->success(null, 'Surat perjanjian deleted successfully');
    }
}
