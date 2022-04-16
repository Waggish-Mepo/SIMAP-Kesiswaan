<?php

namespace App\Http\Controllers\Api;

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
        $res = Surat_Perjanjian::with('Student', 'Student.Rayon', 'Student.Rombel')->get();

        return $this->success(['surat_perjanjian' => $res], 'Surat perjanjian');
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
            'jenis_perjanjian' => 'required',
            'tgl' => 'required',
            'skor',
            'status',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Validation Error', 300, $validator->errors());
        }

        $res = Surat_Perjanjian::create([
            'nis' => $request['nis'],
            'jenis_perjanjian' => $request['jenis_perjanjian'],
            'tgl' => $request['tgl'],
            'skor' => $request['skor'],
            'status' => $request['status'],
            'ket' => $request['ket']
        ]);

        return $this->success(['surat_perjanjian' => $res], 'Surat perjanjian created successfully');
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
            'jenis_perjanjian' => 'required',
            'tgl' => 'required',
            'skor',
            'status',
            'ket' => 'required'
        ]);

        if($validator->fails()){
            return $this->error('Validation Error', 300, $validator->errors());
        }

        $res->update([
            'nis' => $request['nis'],
            'jenis_perjanjian' => $request['jenis_perjanjian'],
            'tgl' => $request['tgl'],
            'skor' => $request['skor'],
            'status' => $request['status'],
            'ket' => $request['ket']
        ]);

        return $this->success(['surat_perjanjian' => $res], 'Surat perjanjian updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Surat_Perjanjian::find($id);

        $res->delete();

        return $this->success(null, 'Surat perjanjian deleted successfully');
    }
}
