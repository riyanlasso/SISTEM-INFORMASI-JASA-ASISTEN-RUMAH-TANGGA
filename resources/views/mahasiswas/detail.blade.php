@extends('mahasiswas.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Detail Agensi
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Agensi: </b>{{$Mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Mahasiswa->alamat}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$Mahasiswa->email}}</li>
                    <li class="list-group-item"><b>No_Handphone: </b>{{$Mahasiswa->telepon}}</li>
                    <li class="list-group-item"><b>dokumen_SIUP: </b>{{$Mahasiswa->dokumen_SIUP}}</li>
                    <li class="list-group-item"><b>Penanggung Jawab: </b>{{$Mahasiswa->penanggung_jawab}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswas.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection