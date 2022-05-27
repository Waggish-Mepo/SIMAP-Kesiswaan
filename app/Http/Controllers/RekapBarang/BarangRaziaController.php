<?php

namespace App\Http\Controllers\RekapBarang;

use App\Models\Student;
use Illuminate\Support\Str;
use App\Models\Barang_Razia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangRaziaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang_Razia::with('Student', 'Student.Rayon', 'Student.Rombel')->get();
        $student_nis = Student::all();
        return view('rekap-barang.razia.index', compact(['data', 'student_nis']));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|exists:m_student,nis',
            'tgl',
            // 'foto_barang',
            'foto_barang' => 'required|image:jpeg,png,jpg',
            'image_path',
            'ket' => 'required',
        ]);
        
        // $ldate = date('Y-m-d H:i:s');

        //upload image
        $path = public_path('/images/barangRazia');
        $status = 0;
        if($request->hasFile('foto_barang')){
            $uploadedImage = $request->foto_barang;
            $imageName = Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        }
        
        try {
            Barang_Razia::create([
                'nis' => $request['nis'],
                'tgl' => $request['tgl'],
                // 'tgl' => $ldate,
                'foto_barang' => $imageName,
                'image_path' => $path,
                'ket' => $request['ket'],
                'status'=> $status
            ]);
        } catch (\Throwable $th) {
            alert()->error('gagal','data gagal diupdate');
        }
        alert()->success('berhasil','data berhasil diupdate');

        return redirect()->route('razia.index');
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
        $data = Barang_Razia::find($id);
        
        $request->validate([
            'nis' => 'required',
            'tgl',
            // 'foto_barang',
            'foto_barang' => 'image:jpeg,png,jpg',
            'image_path',
            'ket' => 'required',
        ]);
        
        // $ldate = date('Y-m-d H:i:s');

        //upload image
        $path = public_path('/images/barangRazia');
        if($request->hasFile('foto_barang') && $request->foto_barang != ''){
            $uploadedImage = $request->foto_barang;
            $imageName = Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        }else{
            $imageName = $data['foto_barang'];
        }
        $data->update([
            'nis' => $request['nis'],
            'tgl' => $request['tgl'],
            // 'tgl' => $ldate,
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket']
        ]);
        // try {
            
        // } catch (\Throwable $th) {
        //     alert()->error('gagal','data gagal diupdate');
        // }
        alert()->success('berhasil','data berhasil diupdate');

        return redirect()->route('razia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang_Razia::find($id);
        $data->delete();

        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('razia.index');
    }

    public function razia($id)
    {
        $data = Barang_Razia::find($id);
        $data->update([
            'status' => 0
        ]);

        alert()->success('Berhasil','Data Berhasil Diupdate');
        return redirect()->route('razia.index');
    }

    public function kembali($id)
    {
        $data = Barang_Razia::find($id);
        $data->update([
            'status' => 1
        ]);

        alert()->success('Berhasil','Data Berhasil Diupdate');
        return redirect()->route('razia.index');
    }

    public function getDetails($nis)
    {
        $data = Barang_Razia::with('Student', 'Student.Rayon', 'Student.Rombel')->where('nis', $nis)->first();
        // $data = Barang_Razia::where('nis', $nis)->first();
        return response()->json($data);
    }


}
