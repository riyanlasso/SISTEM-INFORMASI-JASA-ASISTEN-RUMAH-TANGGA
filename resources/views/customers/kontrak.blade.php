@extends('lowongans.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">

        <div class="card-header"> Kontrak Art
        </div>


        <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><b>Nama:</b>{{$Art->nama}}</li>
            <li class="list-group-item"><b>Alamat: </b>{{$Art->alamat}}</li>
            <li class="list-group-item"><b>Telepon: </b>{{$Art->telepon}}</li>
            <li class="list-group-item"><b>Jenis Kelamin: </b>{{$Art->jenis_kelamin}}</li>
            <li class="list-group-item"><b>Umur: </b>{{$Art->umur}}</li>
            <li class="list-group-item"><b>Agama: </b>{{$Art->agama}}</li>
            <li class="list-group-item"><b>Kota: </b>{{$Art->kota}}</li>
            <li class="list-group-item"><b>Provinsi: </b>{{$Art->provinsi}}</li>

        </ul>

        <a class="btn btn-primary" href="dana.php">E-DANA</a>
        <a class="btn btn-danger" href="bank.php">TRANSFER BANK</a>
        <a class="btn btn-success" href="tunai.php">TUNAI</a>


        <a class="btn btn-success mt-3" href="{{ route('customers.index') }}">Kembali</a>

    </div>
</div>
</div>
@endsection