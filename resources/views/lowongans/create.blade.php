@extends('mahasiswas.layout')
@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Tambah Daftar ART
            </div>
            <div class="card-body"> @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> @endforeach
                    </ul>
                </div> @endif
                <form method="post" action="{{ route('lowongans.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="telepon">email</label>
                        <input type="telepon" name="telepon" class="form-control" id="telepon" aria-describedby="telepon">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">jenis_kelamin</label>

                        <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin" aria-describedby="jenis_kelamin">
                    </div>
                    <div class="form-group">
                        <label for="umur">umur</label>

                        <input type="umur" name="umur" class="form-control" id="umur" aria-describedby="umur">
                    </div>
                    <div class="form-group">
                        <label for="agama">agama</label>

                        <input type="agama" name="agama" class="form-control" id="agama" aria-describedby="agama">
                    </div>
                    <div class="form-group">
                        <label for="kota">kota</label>

                        <input type="kota" name="kota" class="form-control" id="kota" aria-describedby="kota">
                    </div>
                    <div class="form-group">
                        <label for="provinsi">provinsi</label>

                        <input type="provinsi" name="provinsi" class="form-control" id="provinsi" aria-describedby="provinsi">
                    </div>
                    <div class="form-group">
                        <label for="gaji_minimum">gaji_minimum</label>

                        <input type="gaji_minimum" name="gaji_minimum" class="form-control" id="gaji_minimum" aria-describedby="gaji_minimum">
                    </div>
                    <div class="form-group">
                        <label for="gaji_harapan">gaji_harapan</label>

                        <input type="gaji_harapan" name="gaji_harapan" class="form-control" id="gaji_harapan" aria-describedby="gaji_harapan">
                    </div>
                    <div class="form-group">
                        <label for="pengalaman_kerja">pengalaman_kerja</label>

                        <input type="pengalaman_kerja" name="pengalaman_kerja" class="form-control" id="pengalaman_kerja" aria-describedby="pengalaman_kerja">
                    </div>
                    <div class="form-group">
                        <label for="upload">upload</label>

                        <input type="upload" name="upload" class="form-control" id="upload" aria-describedby="upload">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection