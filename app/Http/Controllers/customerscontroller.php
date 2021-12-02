<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class customerscontroller extends Controller
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

        $mahasiswas = Mahasiswa::where([
            ['nama', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('nama', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("nama", "asc")
            ->paginate(5);

        $posts = Mahasiswa::orderBy('id', 'desc')->paginate(6);
        return view('customers.index', compact('mahasiswas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function daftaragensi()
    {
        return view('customers.index');
    }

    public function store(Request $request)
    {

        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'dokumen_SIUP' => 'required',
            'penanggung_jawab' => 'required',
        ]);

        //fungsi eloquent untuk menambah data 
        Mahasiswa::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Agen Berhasil Ditambahkan');
    }

    public function show(Request $request)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        // $Mahasiswa = Mahasiswa::all()->where('nama', $nama)->first();
        // return view('customers.detail', ['Mahasiswa' => $Mahasiswa]);
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

    public function edit($nama)
    {

        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = Mahasiswa::all()->where('nama', $nama)->first();
        return view('mahasiswas.edit', compact('Mahasiswa'));
    }

    public function update(Request $request, $nama)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'dokumen_SIUP' => 'required',
            'penanggung_jawab' => 'required'
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        $mhs = Mahasiswa::all()->where('nama', $nama)->first();
        $mhs->nama = request('nama');
        $mhs->alamat = request('alamat');
        $mhs->telepon = request('telepon');
        $mhs->email = request('email');
        $mhs->dokumen_SIUP = request('dokumen_SIUP');
        $mhs->penanggung_jawab = request('penanggung_jawab');
        $mhs->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Agensi Berhasil Diupdate');
    }
    public function destroy($nama)
    {
        //fungsi eloquent untuk menghapus data 
        $maba = Mahasiswa::all()->where('nama', $nama)->first();
        $maba->delete();

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Agensi Berhasil Dihapus');
    }
    public function index1(Request $request)
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
};
