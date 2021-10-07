@extends('agens.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Detail Agensi
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>nama: </b>{{$agens->nama}}</li>
                    <li class="list-group-item"><b>alamat: </b>{{$agens->alamat}}</li>
                    <li class="list-group-item"><b>email: </b>{{$agens->email}}</li>
                    <li class="list-group-item"><b>telepon: </b>{{$agens->telepon}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('agens.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection