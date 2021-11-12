<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class lowongancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        // $mahasiswas = Mahasiswa::all(); // Mengambil semua isi tabel
        // $posts = Mahasiswa::orderBy('Nim', 'desc')->paginate(6);
        // return view('mahasiswas.index', compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5); //mahasiswas adalah nama folder

        $lowongans = Art::where([
            ['nama', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('nama', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("nama", "asc")
            ->paginate(5);

        $posts = Art::orderBy('id', 'desc')->paginate(6);
        return view('lowongans.index', compact('lowongans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('lowongans.create');
    }
    public function store(Request $request)
    {

        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
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

        //fungsi eloquent untuk menambah data 
        Art::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('lowongans.index')
            ->with('success', 'Lowongan Asisten Rumah Tangga Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Lowongan1 = Art::all()->where('id', $id)->first();
        return view('lowongans.detail', ['Art' => $Lowongan1]); // 'Art' mewakili variabel $Lowongan
    }

    public function edit($nama)
    {

        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = Art::all()->where('nama', $nama)->first();
        return view('lowongans.edit', compact('Mahasiswa'));
    }

    public function update(Request $request, $nama)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
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
        $art = Art::all()->where('nama', $nama)->first();
        $art->nama = request('nama');
        $art->alamat = request('alamat');
        $art->telepon = request('telepon');
        $art->jenis_kelamin = request('jenis_kelamin');
        $art->agama = request('agama');
        $art->kota = request('kota');
        $art->provinsi = request('provinsi');
        $art->gaji_minimum = request('gaji_minimum');
        $art->pengalaman_kerja = request('pengalaman_kerja');
        $art->upload = request('upload');
        $art->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('lowongans.index')
            ->with('success', 'Daftar Asister Rumah Tangga Berhasil Diupdate');
    }
    public function destroy($nama)
    {
        //fungsi eloquent untuk menghapus data 
        $maba = Art::all()->where('nama', $nama)->first();
        $maba->delete();

        return redirect()->route('lowongans.index')
            ->with('success', 'ART Berhasil Dihapus');
    }
};
