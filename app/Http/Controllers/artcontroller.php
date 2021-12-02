<?php

namespace App\Http\Controllers;

use App\Models\User;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class artcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.registerArt');
    }
    public function profil()
    {

        $user = Auth::user();
        return view('art.profil', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daftar = new User();
        $daftar->nama = Request('nama');
        $daftar->alamat = Request('alamat');
        $daftar->email = Request('email');
        $daftar->password = Request('password');
        $daftar->telepon = Request('telepon');
        $daftar->jenis_kelamin = Request('jenis_kelamin');
        $daftar->umur = Request('umur');
        $daftar->agama = Request('agama');
        $daftar->kota = Request('kota');
        $daftar->provinsi = Request('provinsi');
        $daftar->gaji_minimum = Request('gaji_minimum');
        $daftar->gaji_harapan = Request('gaji_harapan');
        $daftar->pengalaman_kerja = Request('pengalaman_kerja');
        $daftar->upload = Request('upload');
        $daftar->level = Request('level');
        $daftar->save();
        return view('art.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama)
    {
        $user = Auth::user();
        return view('art.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nama)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'agama' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'gaji_minimum' => 'required',
            'gaji_harapan' => 'required',
            'pengalaman_kerja' => 'required',
            'upload' => 'required',

        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        $daftar = new User();
        $daftar->nama = Request('nama');
        $daftar->alamat = Request('alamat');
        $daftar->email = Request('email');
        $daftar->password = Request('password');
        $daftar->telepon = Request('telepon');
        $daftar->jenis_kelamin = Request('jenis_kelamin');
        $daftar->umur = Request('umur');
        $daftar->agama = Request('agama');
        $daftar->kota = Request('kota');
        $daftar->provinsi = Request('provinsi');
        $daftar->gaji_minimum = Request('gaji_minimum');
        $daftar->gaji_harapan = Request('gaji_harapan');
        $daftar->pengalaman_kerja = Request('pengalaman_kerja');
        $daftar->upload = Request('upload');
        $daftar->level = Request('level');
        $daftar->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('profil.profil')
            ->with('success', 'Data ART Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
