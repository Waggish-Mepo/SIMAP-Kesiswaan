<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('akun.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'username'=>'required|unique:m_user,username',
            'email'=>'required|unique:m_user,email',
            'role' => 'required',
            'sub_role' => 'nullable',
            'password'=>'required',
        ]);

        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'role'=>$request->role,
            'sub_role'=>$request->sub_role,
            'password'=>Hash::make($request->password),
        ]);

        alert()->success('Berhasil','Data Berhasil Disimpan');

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = User::find($id);
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'role' => 'required',
            'sub_role' => 'nullable',
            'password'=>'required',
        ]);

        $data->update([
            'username'=>$request->username,
            'email'=>$request->email,
            'role'=>$request->role,
            'sub_role'=>$request->sub_role,
            'password'=>Hash::make($request->password),
        ]);

        alert()->success('Berhasil','Data Berhasil Diupdate');
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        alert()->success('Berhasil','Data Berhasil Dihapus');
        return redirect()->back();
    }
}
