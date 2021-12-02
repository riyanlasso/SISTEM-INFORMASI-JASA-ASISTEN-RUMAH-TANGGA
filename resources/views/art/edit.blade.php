@extends('mahasiswas.layout')
@section('content')
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
                <form method="post" action="{{ route('editart.update', $user->nama) }}" id="myForm">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $user->nama }}" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $user->alamat }}" aria-describedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" aria-describedby="email">
                    </div>

                    <div class="form-group">
                        <label for="telepon">telepon</label>
                        <input type="telepon" name="telepon" class="form-control" id="telepon" value="{{ $user->telepon }}" aria-describedby="telepon">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">jenis_kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $user->jenis_kelamin }}" aria-describedby="jenis_kelamin">
                    </div>
                    <div class="form-group">
                        <label for="umur">umur</label>
                        <input type="text" name="umur" class="form-control" id="umur" value="{{ $user->umur }}" aria-describedby="umur">
                    </div>
                    <div class="form-group">
                        <label for="telepon">telepon</label>
                        <input type="text" name="telepon" class="form-control" id="telepon" value="{{ $user->telepon }}" aria-describedby="telepon">
                    </div>
                    <div class="form-group">
                        <label for="agama">agama</label>
                        <input type="text" name="agama" class="form-control" id="agama" value="{{ $user->agama }}" aria-describedby="agama">
                    </div>
                    <div class="form-group">
                        <label for="kota">kota</label>
                        <input type="text" name="kota" class="form-control" id="kota" value="{{ $user->kota }}" aria-describedby="kota">
                    </div>
                    <div class="form-group">
                        <label for="provinsi">provinsi</label>
                        <input type="text" name="provinsi" class="form-control" id="provinsi" value="{{ $user->provinsi }}" aria-describedby="provinsi">
                    </div>
                    <div class="form-group">
                        <label for="gaji_minimum">gaji_minimum</label>
                        <input type="text" name="gaji_minimum" class="form-control" id="gaji_minimum" value="{{ $user->gaji_minimum }}" aria-describedby="gaji_minimum">
                    </div>
                    <div class="form-group">
                        <label for="gaji_harapan">gaji_harapan</label>
                        <input type="text" name="gaji_harapan" class="form-control" id="gaji_harapan" value="{{ $user->gaji_harapan }}" aria-describedby="gaji_harapan">
                    </div>
                    <div class="form-group">
                        <label for="pengalaman_kerja">pengalaman_kerja</label>
                        <input type="text" name="pengalaman_kerja" class="form-control" id="pengalaman_kerja" value="{{ $user->pengalaman_kerja }}" aria-describedby="pengalaman_kerja">
                    </div>
                    <div class="form-group">
                        <label for="upload">upload</label>
                        <input type="text" name="upload" class="form-control" id="upload" value="{{ $user->upload }}" aria-describedby="upload">
                    </div>
                    <input type="hidden" name="password" class="form-control" id="password" value="{{ $user->password }}" aria-describedby="password">
                    <input type="hidden" name="level" class="form-control" id="level" value="4" aria-describedby="level">


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection