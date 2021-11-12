@extends('lowongans.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Detail Agensi
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama:</b>{{$Art->nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Art->alamat}}</li>
                    <li class="list-group-item"><b>Telepon: </b>{{$Art->telepon}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$Art->jenis_kelamin}}</li>
                    <li class="list-group-item"><b>Umur: </b>{{$Art->umur}}</li>
                    <li class="list-group-item"><b>Agama: </b>{{$Art->agama}}</li>
                    <li class="list-group-item"><b>Kota: </b>{{$Art->kota}}</li>
                    <li class="list-group-item"><b>Provinsi: </b>{{$Art->provinsi}}</li>
                    <li class="list-group-item"><b>Gaji_minimum: </b>{{$Art->gaji_minimum}}</li>
                    <li class="list-group-item"><b>Gaji_harapan: </b>{{$Art->gaji_harapan}}</li>
                    <li class="list-group-item"><b>Pengalaman Kerja: </b>{{$Art->pengalaman_kerja}}</li>
                    <li class="list-group-item"><b>Upload surat pernyataan kerja: </b>{{$Art->upload}}</li>

                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('lowongans.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection