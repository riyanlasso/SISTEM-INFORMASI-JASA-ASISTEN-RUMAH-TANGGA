@extends('customers.app')
@section('content')
<div id="Navbar_bu">
    <svg class="Rectangle_16_bv">
        <rect id="Rectangle_16_bv" rx="0" ry="0" x="0" y="0" width="1920" height="125">
        </rect>
    </svg>
    <div id="AGEN_ART_bw">
        <a href="customers" style="color: black;">DAFTAR AGENSI</a>
    </div>
    <div id="MYSERVANT_by">
        <span>MYSERVANT</span>
    </div>
    <div id="HOME_bz">
        <a href="/" style="color: black;">HOME</a>
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
    <div style="margin: 100px;">
        <div class="row" style="margin-top: 300px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                    <center>
                        <h2>LOWONGAN ASISTEN RUMAH TANGGA</h2>
                    </center>
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
                <th>telepon</th>
                <th>jenis_kelamin</th>
                <th>umur</th>
                <th>agama</th>
                <th>kota</th>
                <th>provinsi</th>
                <th>gaji_minimum</th>
                <th>gaji_harapan</th>
                <th>pengalaman_kerja</th>
                <th>upload surat pernyataan kerja</th>
                <th width="280px">Action</th>
            </tr>
        </table>

    </div>
    @endsection
</div>