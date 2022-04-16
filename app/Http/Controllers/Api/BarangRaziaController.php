<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Models\Barang_Razia;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BarangRaziaController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Barang_Razia::with('Student', 'Student.Rayon', 'Student.Rombel')->get();

        return $this->success(['barang_razia' => $res], 'Barang Razia');
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
            'tgl',
            // 'foto_barang',
            'foto_barang' => 'required|image:jpeg,png,jpg',
            'image_path',
            'ket' => 'required',
        ]);

        if($validator->fails()){
            return $this->error('Validation Error', 400 ,$validator->errors());
        }

        // $ldate = date('Y-m-d H:i:s');

        //upload image
        $path = public_path('/images/barangRazia');
        if($request->hasFile('foto_barang')){
            $uploadedImage = $request->foto_barang;
            $imageName = Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        }
           
        

        $res = Barang_Razia::create([
            'nis' => $request['nis'],
            'tgl' => $request['tgl'],
            // 'tgl' => $ldate,
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket'],
        ]);

        return $this->success(['barang_razia' => $res], 'Barang razia created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = Barang_Razia::with('Student', 'Student.Rayon', 'Student.Rombel')->where('id', $id)->get();
        // $res = Barang_Razia::find($id);

        return $this->success(['barang_razia' => $res], 'Barang Razia');
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
        $res = Barang_Razia::find($id);
        
        $validatedData = Validator::make($request->all(), [
            'nis' => 'required',
            'tgl',
            // 'foto_barang',
            'foto_barang' => 'nullable|image:jpeg,png,jpg',
            'ket' => 'required',
            'status'
        ]);
        
        if($validatedData->fails()){
            return $this->error('Validation Error', 400 ,$validatedData->errors());
            // return response()->json($validator->errors());
        }

        $path = public_path('/images/barangRazia');
        if($request->file('foto_barang')){
            $uploadedImage = $request->foto_barang;
            $imageName = Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        } else {
            $imageName = $res->foto_barang;
        }

        $res->update([
            'nis' => $request['nis'],
            'tgl' => $request['tgl'],
            // 'tgl' => $ldate,
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket'],
            'status' => $request['status'],
        ]);

       return $this->success(['barang_razia' => $res], 'Barang razia updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Barang_Razia::find($id);

        $res->delete();

        return $this->success(null, 'Barang razia deleted successfully');
    }
}
