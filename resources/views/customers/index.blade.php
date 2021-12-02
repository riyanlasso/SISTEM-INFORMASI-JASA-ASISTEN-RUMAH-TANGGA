@extends('customers.app')
@section('content')
<div id="Navbar_bu">
    <svg class="Rectangle_16_bv">
        <rect id="Rectangle_16_bv" rx="0" ry="0" x="0" y="0" width="1920" height="125">
        </rect>
    </svg>
    <div id="AGEN_ART_bw">
        <a href="customers  " style="color: black;">DAFTAR AGENSI</a>
    </div>
    <div id="MYSERVANT_by">
        <span>MYSERVANT</span>
    </div>
    <div id="HOME_bz">
        <a href="home" style="color: black;">HOME</a>
    </div>
    <img id="broom_b" src="{{URL('/img/broom_b.png')}}">

    <img id="search_bar_2_b" src="{{URL('/img/search_bar_2_b.png')}}">

    <svg class="Path_1_b" viewBox="0 0 1920 5">
        <path id="Path_1_b" d="M 0 0 L 1920 0">
        </path>
    </svg>

    <div id="ABOUT_US_b">
        <a href="/about" style="color: black;">ABOUT US</a>
    </div>

    <img id="user" src="{{URL('/img/user.png')}}"></img>
    <div style="margin:100px">
        <div class="row" style="margin-top: 300px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                    <center>
                        <h2>DAFTAR AGENSI ASISTEN RUMAH TANGGA</h2>
                    </center>
                </div>
            </div>
        </div>

        <!-- //fitur cari -->

        <div>
            <div class="mx-auto pull-right">
                <div class="">
                    <form action="{{ route('customers.index') }}" method="GET" role="search">

                        <div class="input-group">
                            <span class="input-group-btn mr-5 mt-1">
                                <button class="btn btn-info" type="submit" value="Cari" title="Search mahasiswa">Cari</button>
                                <span class="fas fa-search"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control mr-2" name="term" placeholder="Search nama" id="term">
                            <a href="{{ route('customers.index') }}" class=" mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">Refresh</button>
                                    <span class="fas fa-sync-alt"></span>
                                    </button>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- sampai sini -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>
                    <center>nama<center>
                </th>
                <th>
                    <center>alamat<center>
                </th>
                <th>
                    <center>telepon<center>
                </th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($mahasiswas as $Mahasiswa)
            <tr>

                <td>{{ $Mahasiswa->nama }}</td>
                <td>{{ $Mahasiswa->alamat }}</td>
                <td>{{ $Mahasiswa->telepon }}</td>
                <td>
                    <form action="{{ route('mahasiswas.destroy',$Mahasiswa->nama) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->nama) }}">Select</a>

                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$mahasiswas->links('pagination::bootstrap-4')}}
        @endsection
    </div>
</div>