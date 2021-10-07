<?php

namespace App\Http\Controllers;

use App\Models\agen;

use Illuminate\Http\Request;

class agencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agens = agen::all(); // Mengambil semua isi tabel
        $posts = agen::orderBy('nama', 'desc')->paginate(6);
        return view('agen', compact('agens'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agens.create');
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
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'dokumen_SIUP' => 'required',
            'penanggung_jawab'  => 'required',
        ]);
        agen::create($request->all());
        return redirect()->route('agens.index')
            ->with('success', 'Agen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $agens = agen::find($nama);
        return view('agens.detail', compact('agens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama)
    {
        $agens = agen::find($nama);
        return view('mahasiswas.edit', compact('agens'));
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
            'telepon' => 'required',
            'dokumen_SIUP' => 'required',
            'penanggung_jawab'  => 'required',
        ]);

        agen::find($nama)->update($request->all());
        return redirect()->route('agens.index')
            ->with('success', 'Agen Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nama)
    {
        agen::find($nama)->delete();
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
