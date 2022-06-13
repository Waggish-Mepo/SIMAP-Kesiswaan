<?php

namespace App\Http\Controllers\RekapBarang;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Barang_Temuan;
use App\Http\Controllers\Controller;

class BarangTemuanController extends Controller
{
    public function index()
    {
        $data = Barang_Temuan::with('Penemu', 'Penemu.Rayon', 'Penemu.Rombel')->get();
        $student_nis = Student::all();
        return view('rekap-barang.temuan.index', compact(['data', 'student_nis']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penemu' => 'required',
            'pemilik',
            'tgl' => 'required',
            'foto_barang' => 'required|image:jpeg,png,jpg',
            'image_path',
            'ket',
            'status'
        ]);

        //upload image
        $path = public_path('/images/barangTemuan');
        $status = 0;
        if($request->hasFile('foto_barang')){
            $uploadedImage = $request->foto_barang;
            $imageName = $request->penemu.'-'.Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        }

        Barang_Temuan::create([
            'penemu' => $request['penemu'],
            'pemilik' => $request['pemilik'],
            'tgl' => $request['tgl'],
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket'],
            'status' => $status
        ]);

        alert()->success('Berhasil', 'Data Berhasil Dibuat');

        return redirect()->route('temuan.index');
    }

    public function update(Request $request, $id)
    {
        $data = Barang_Temuan::find($id);
        $request->validate([
            'penemu' => 'required',
            'pemilik' => 'required|exists:m_student,nis',
            'tgl' => 'required',
            'foto_barang' => 'image:jpeg,png,jpg',
            'image_path',
            'ket',
        ]);

        //upload image
        $path = public_path('/images/barangTemuan');
        if($request->hasFile('foto_barang') && $request->foto_barang != ''){
            $uploadedImage = $request->foto_barang;
            $imageName = $request->penemu.'-'.Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        } else{
            $imageName = $data['foto_barang'];
        }

        $data->update([
            'penemu' => $request['penemu'],
            'pemilik' => $request['pemilik'],
            'tgl' => $request['tgl'],
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket'],
        ]);

        alert()->success('Berhasil', 'Data Berhasil Diupdate');

        return redirect()->route('temuan.index');
    }

    public function ambil(Request $request, $id)
    {
        $data = Barang_Temuan::find($id);
        $request->validate([
            'penemu' => 'required',
            'pemilik',
            'tgl' => 'required',
            'foto_barang' => 'image:jpeg,png,jpg',
            'image_path',
            'ket',
        ]);

        //upload image
        $path = public_path('/images/barangTemuan');
        if($request->hasFile('foto_barang') && $request->foto_barang != ''){
            $uploadedImage = $request->foto_barang;
            $imageName = $request->penemu.'-'.Str::random(15). '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move($path, $imageName);
            // $uploadedImage->foto_barang = $imageName;
        } else{
            $imageName = $data['foto_barang'];
        }

        $data->update([
            'penemu' => $request['penemu'],
            'pemilik' => $request['pemilik'],
            'tgl' => $request['tgl'],
            'foto_barang' => $imageName,
            'image_path' => $path,
            'ket' => $request['ket'],
            'status' => 1
        ]);

        alert()->success('Berhasil', 'Data Berhasil Diupdate');

        return redirect()->route('temuan.index');
    }

    public function destroy($id)
    {
        $data = Barang_Temuan::find($id);
        $data->delete();

        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->route('temuan.index');
    }

    public function getDetails($nis)
    {
        $data = Student::with('Rayon', 'Rombel')->where('nis', $nis)->first();
        // $data = Barang_Razia::where('nis', $nis)->first();
        return response()->json($data);
    }
    // public function ambil($id)
    // {
    //     $data = Barang_Temuan::find($id);
    //     $data->update([
    //         'status' => 1
    //     ]);

    //     alert()->success('Berhasil','Data Berhasil Diupdate');
    //     return redirect()->route('temuan.index');
    // }
}
