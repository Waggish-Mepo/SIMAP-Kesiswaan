<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Barang_Temuan;
use App\Http\Traits\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BarangTemuanController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Barang_Temuan::with('Student', 'Penemu', 'Student.Rayon', 'Student.Rombel')->get();

        return $this->success(['barang_temuan' => $res], 'Barang Temuan');
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
            'penemu' => 'required',
            'tgl' => 'required',
            'foto_barang' => 'required|image:jpeg, png, jpg',
            'image_path',
            'ket' => 'required',
        ]);

        if($validator->fails()){
            return $this->error('Validation Error', 400 ,$validator->errors());
        }

        //upload image
        $path = public_path('/images/barangTemuan');
        if($request->hasFile('foto_barang')){
            $uploadedImage = $request->foto_barang;
            $imageName = Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        } 
           
    
        $res = Barang_Temuan::create([
            'nis' => $request['nis'],
            'penemu' => $request['penemu'],
            'tgl' => $request['tgl'],
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket'],
        ]);

        return $this->success(['barang_temuan' => $res], 'Barang temuan created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = Barang_Temuan::with('Student', 'Student.Rayon', 'Student.Rombel')->where('id', $id)->get();
        // $res = Barang_Temuan::find($id);

        return $this->success(['barang_temuan' => $res], 'Barang Temuan');
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
        $res = Barang_Temuan::find($id);
        
        $validator = Validator::make($request->all(), [
            'nis' => 'required',
            'penemu' => 'required',
            'tgl' => 'required',
            'foto_barang' => 'sometimes|image:jpeg, png, jpg',
            'image_path',
            'ket' => 'required',
            'status',
        ]);
        
        if($validator->fails()){
            return $this->error('Validation Error', 400 ,$validator->errors());
            // return response()->json($validator->errors());
        }

        //upload image
        $path = public_path('/images/barangTemuan');
        if($request->hasFile('foto_barang')){
            $uploadedImage = $request->foto_barang;
            $imageName = Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        } else {
            $imageName = $res->foto_barang;
        }

        $res->update([
            'nis' => $request['nis'],
            'penemu' => $request['penemu'],
            'tgl' => $request['tgl'],
            // 'tgl' => $ldate,
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket'],
            'status' => $request['status'],
        ]);

       return $this->success(['barang_temuan' => $res], 'Barang temuan updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Barang_Temuan::find($id);

        $res->delete();

        return $this->success(null, 'Barang temuan deleted successfully');
    }
}
