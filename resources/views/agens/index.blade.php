@extends('agens.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>AGEN</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('agens.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>nama</th>
        <th>alamat</th>
        <th>email</th>
        <th>telepon</th>
        <th>dokumen_SIUP</th>
        <th>penanggung_jawab</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($agens as $agen)
    <tr>

        <td>{{ $agen->nama }}</td>
        <td>{{ $agen->alamat }}</td>
        <td>{{ $agen->email }}</td>
        <td>{{ $agen->telepon }}</td>
        <td>{{ $agen->dokumen_SIUP }}</td>
        <td>{{ $agen->penanggung_jawab }}</td>
        <td>
            <form action="{{ route('agens.destroy',$agen->nama) }}" method="POST">

                <a class="btn btn-info" href="{{ route('agens.show',$agen->nama) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('agens.edit',$agen->nama) }}">Edit</a>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection