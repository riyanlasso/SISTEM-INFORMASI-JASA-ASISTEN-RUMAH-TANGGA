@extends('mahasiswas.layout')
@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Edit Data Agensi
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
                <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nama) }}" id="myForm">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Agensi</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Mahasiswa->nama }}" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $Mahasiswa->alamat }}" aria-describedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $Mahasiswa->email }}" aria-describedby="email">
                    </div>
                    <div class="form-group">
                        <label for="telepon">telepon</label>
                        <input type="telepon" name="telepon" class="form-control" id="telepon" value="{{ $Mahasiswa->telepon }}" aria-describedby="telepon">
                    </div>
                    <div class="form-group">
                        <label for="dokumen_SIUP">dokumen_SIUP</label>

                        <input type="dokumen_SIUP" name="dokumen_SIUP" class="form-control" id="dokumen_SIUP" value="{{ $Mahasiswa->dokumen_SIUP }}" aria-describedby="dokumen_SIUP">
                    </div>
                    <div class="form-group">
                        <label for="penanggung_jawab">penanggung_jawab</label>
                        <input type="penanggung_jawab" name="penanggung_jawab" class="form-control" id="penanggung_jawab" value="{{ $Mahasiswa->penanggung_jawab }}" aria-describedby="penanggung_jawab">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> @endsection