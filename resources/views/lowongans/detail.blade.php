@extends('lowongans.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Detail Agensi
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b></li>
                    <li class="list-group-item"><b>Alamat: </b></li>
                    <li class="list-group-item"><b>Telepon: </b></li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b></li>
                    <li class="list-group-item"><b>Umur: </b></li>
                    <li class="list-group-item"><b>Agama: </b></li>
                    <li class="list-group-item"><b>Kota: </b></li>
                    <li class="list-group-item"><b>Provinsi: </b></li>
                    <li class="list-group-item"><b>Gaji_minimum: </b></li>
                    <li class="list-group-item"><b>Gaji_harapan: </b></li>
                    <li class="list-group-item"><b>Pengalaman Kerja: </b></li>
                    <li class="list-group-item"><b>Upload surat pernyataan kerja: </b></li>

                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('lowongans.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection