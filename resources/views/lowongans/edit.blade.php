@extends('lowongans.layout') @section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Edit Data ART
            </div>
            <div class="card-body"> @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> @endforeach
                    </ul>
                </div> @endif
                <form method="post" action="{{ route('lowongans.update', $Mahasiswa->nama) }}" id="myForm">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="nama" name="nama" class="form-control" id="nama" value="{{ $Mahasiswa->nama }}" aria-describedby="nama" required="required">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $Mahasiswa->alamat }}" aria-describedby="alamat" required="required">
                    </div>
                    <div class="form-group">
                        <label for="telepon">email</label>
                        <input type="telepon" name="telepon" class="form-control" id="telepon" value="{{ $Mahasiswa->telepon }}" aria-describedby="telepon" required="required">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">jenis_kelamin</label>

                        <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $Mahasiswa->jenis_kelamin }}" aria-describedby="jenis_kelamin" required="required">
                    </div>
                    <div class="form-group">
                        <label for="umur">umur</label>

                        <input type="umur" name="umur" class="form-control" id="umur" value="{{ $Mahasiswa->umur }}" aria-describedby="umur" required="required">
                    </div>
                    <div class="form-group">
                        <label for="agama">agama</label>

                        <input type="agama" name="agama" class="form-control" id="agama" value="{{ $Mahasiswa->agama }}" aria-describedby="agama" required="required">
                    </div>
                    <div class="form-group">
                        <label for="kota">kota</label>

                        <input type="kota" name="kota" class="form-control" id="kota" value="{{ $Mahasiswa->kota }}" aria-describedby="kota" required="required">
                    </div>
                    <div class="form-group">
                        <label for="provinsi">provinsi</label>

                        <input type="provinsi" name="provinsi" class="form-control" id="provinsi" value="{{ $Mahasiswa->provinsi }}" aria-describedby="provinsi" required="required">
                    </div>
                    <div class="form-group">
                        <label for="gaji_minimum">gaji_minimum</label>

                        <input type="gaji_minimum" name="gaji_minimum" class="form-control" id="gaji_minimum" value="{{ $Mahasiswa->gaji_minimum }}" aria-describedby="gaji_minimum" required="required">
                    </div>
                    <div class="form-group">
                        <label for="gaji_harapan">gaji_harapan</label>

                        <input type="gaji_harapan" name="gaji_harapan" class="form-control" id="gaji_harapan" value="{{ $Mahasiswa->gaji_harapan }}" aria-describedby="gaji_harapan" required="required">
                    </div>
                    <div class="form-group">
                        <label for="pengalaman_kerja">pengalaman_kerja</label>

                        <input type="pengalaman_kerja" name="pengalaman_kerja" class="form-control" id="pengalaman_kerja" value="{{ $Mahasiswa->pengalaman_kerja }}" aria-describedby="pengalaman_kerja" required="required">
                    </div>
                    <div class="form-group">
                        <label for="upload">upload</label>

                        <input type="upload" name="upload" class="form-control" id="upload" value="{{ $Mahasiswa->upload }}" aria-describedby="upload" required="required">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> @endsection