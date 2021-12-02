<html>

<head>
    <title>Daftar ART oke</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384- Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="an onymous">
    <script src="https://code.jquery.com/jquery- 3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="an onymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/poppe r.min.js" integrity="sha384- Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="an onymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootst rap.min.js" integrity="sha384- wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="an onymous"></script>
    <!-- style awal -->
    <style>
        .mediaViewInfo {
            --web-view-name: HALAMAN UTAMA SESUDAH LOGIN;
            --web-view-id: HALAMAN_UTAMA_SESUDAH_LOGIN_;
            --web-scale-on-resize: true;
            --web-enable-deep-linking: true;
        }

        :root {
            --web-view-ids: HALAMAN_UTAMA_SESUDAH_LOGIN_;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }

        #HALAMAN_UTAMA_SESUDAH_LOGIN_ {
            position: absolute;
            width: 1920px;
            height: 1080px;
            background-color: rgba(255, 255, 255, 1);
            overflow: hidden;
            --web-view-name: HALAMAN UTAMA SESUDAH LOGIN;
            --web-view-id: HALAMAN_UTAMA_SESUDAH_LOGIN_;
            --web-scale-on-resize: true;
            --web-enable-deep-linking: true;
        }

        @keyframes fadein {

            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }

        }

        #texture_bp {
            position: absolute;
            width: 2214px;
            height: 1723px;
            left: -147px;
            top: 0px;
            overflow: visible;
        }

        #house_bq {
            filter: drop-shadow(5px 6px 10px rgba(0, 0, 0, 0.161));
            position: absolute;
            width: 1919.305px;
            height: 921px;
            left: 0.695px;
            top: 159px;
            overflow: visible;
        }

        #Rectangle_1_br {
            fill: rgba(222, 222, 223, 1);
            stroke: rgba(0, 0, 0, 1);
            stroke-width: 2px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 4;
            shape-rendering: auto;
        }

        .Rectangle_1_br {
            filter: drop-shadow(15px 10px 6px rgba(0, 0, 0, 0.161));
            position: absolute;
            overflow: visible;
            width: 820px;
            height: 750px;
            left: 81px;
            top: 195px;
        }

        #Rectangle_2_bs {
            fill: rgba(69, 92, 117, 1);
            stroke: rgba(112, 112, 112, 1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 4;
            shape-rendering: auto;
        }

        .Rectangle_2_bs {
            position: absolute;
            overflow: visible;
            width: 765px;
            height: 696px;
            left: 97px;
            top: 211px;
        }

        #servant_bt {
            position: absolute;
            width: 279px;
            height: 600.087px;
            left: 890px;
            top: 479.913px;
            overflow: visible;
        }

        #Navbar_bu {
            position: absolute;
            width: 1920px;
            height: 425px;
            left: 0px;
            top: -143px;
            overflow: visible;
        }

        #Rectangle_16_bv {
            fill: rgba(255, 255, 255, 1);
            stroke: rgba(255, 255, 255, 1);
            stroke-width: 1px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 4;
            shape-rendering: auto;
        }

        .Rectangle_16_bv {
            position: absolute;
            overflow: visible;
            width: 1920px;
            height: 125px;
            left: 0px;
            top: 143px;
        }

        #AGEN_ART_bw {
            left: 1159px;
            top: 189px;
            position: absolute;
            overflow: visible;
            width: 168px;
            white-space: nowrap;
            --web-animation: fadein 0.3s ease-out;
            --web-action-type: page;
            --web-action-target: AGEN_ART.html;
            cursor: pointer;
            text-align: left;
            font-family: Segoe UI;
            font-style: normal;
            font-weight: bold;
            font-size: 34px;
            color: rgba(0, 0, 0, 1);
        }

        #LOWONGAN_bx {
            left: 1356px;
            top: 190px;
            position: absolute;
            overflow: visible;
            width: 205px;
            white-space: nowrap;
            --web-animation: fadein 0.3s ease-out;
            --web-action-type: page;
            --web-action-target: HALAMAN_DAFTAR_PEKERJA_____Transaksi.html;
            cursor: pointer;
            text-align: left;
            font-family: Segoe UI;
            font-style: normal;
            font-weight: bold;
            font-size: 34px;
            color: rgba(0, 0, 0, 1);
        }

        #MYSERVANT_by {
            left: 81px;
            top: 172px;
            position: absolute;
            overflow: visible;
            width: 321px;
            white-space: nowrap;
            text-align: left;
            font-family: Segoe UI;
            font-style: normal;
            font-weight: normal;
            font-size: 50px;
            color: rgba(0, 0, 0, 1);
        }

        #HOME_bz {
            filter: drop-shadow(7px 5px 6px rgba(0, 0, 0, 0.161));
            left: 1027px;
            top: 189px;
            position: absolute;
            overflow: visible;
            width: 103px;
            white-space: nowrap;
            text-align: left;
            font-family: Segoe UI;
            font-style: normal;
            font-weight: bold;
            font-size: 34px;
            color: rgba(0, 0, 0, 1);
        }

        #broom_b {
            position: absolute;
            width: 111px;
            height: 111px;
            left: 407px;
            top: 150px;
            overflow: visible;
        }

        #search_bar_2_b {
            position: absolute;
            width: 425px;
            height: 425px;
            left: 572px;
            top: 0px;
            overflow: visible;
        }

        #Search____b {
            left: 710px;
            top: 187px;
            position: absolute;
            overflow: visible;
            width: 151px;
            white-space: nowrap;
            text-align: left;
            font-family: Segoe UI;
            font-style: normal;
            font-weight: normal;
            font-size: 34px;
            color: rgba(0, 0, 0, 1);
        }

        #Path_1_b {
            fill: rgba(0, 0, 0, 1);
            stroke: rgba(0, 0, 0, 1);
            stroke-width: 5px;
            stroke-linejoin: miter;
            stroke-linecap: butt;
            stroke-miterlimit: 4;
            shape-rendering: auto;
        }

        .Path_1_b {
            overflow: visible;
            position: absolute;
            width: 1920px;
            height: 5px;
            left: 0px;
            top: 270.5px;
            transform: matrix(1, 0, 0, 1, 0, 0);
        }

        #ABOUT_US_b {
            filter: drop-shadow(7px 5px 6px rgba(0, 0, 0, 0.161));
            left: 1590px;
            top: 190px;
            position: absolute;
            overflow: visible;
            width: 170px;
            white-space: nowrap;
            --web-animation: fadein 0.3s ease-out;
            --web-action-type: page;
            --web-action-target: ABOUT_US.html;
            cursor: pointer;
            text-align: left;
            font-family: Segoe UI;
            font-style: normal;
            font-weight: bold;
            font-size: 34px;
            color: rgba(0, 0, 0, 1);
        }

        #user {
            position: absolute;
            width: 113px;
            height: 113px;
            left: 1782px;
            top: 149px;
            overflow: visible;
            --web-animation: fadein 0.3s ease-out;
            --web-action-type: page;
            --web-action-target: DROPDOWN_PROFILE.html;
            cursor: pointer;
        }

        .mainmenubtn {
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
            padding: 20px;
            margin-top: 20px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-child {
            display: none;
            background-color: black;
            min-width: 200px;
        }

        .dropdown-child a {
            color: white;
            padding: 20px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-child {
            display: block;
        }
    </style>
    <!-- style sampai sini -->
</head>

<body>
    <div class="container">
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
                <!-- //fitur cari -->
                <!-- <div>
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
                                    <a href="{{ route('lowongans.index') }}" class=" mt-1">
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
                </div> -->
                <!-- sampai sini -->

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th>
                            <center>NAMA<center>
                        </th>
                        <th>
                            <center>ALAMAT<center>
                        </th>
                        <th>
                            <center>TELEPON<center>
                        </th>
                        <th>
                            <center>JENIS KELAMIN<center>
                        </th>
                        <th>
                            <center>KOTA<center>
                        </th>
                        <th>
                            <center>PENGALAMAN KERJA<center>
                        </th>
                        <th width="280px">
                            <center>Action<center>
                        </th>
                    </tr>
                    @foreach ($lowongans as $Lowongan )
                    <tr>
                        <td>{{ $Lowongan->nama}}</td>
                        <td>{{ $Lowongan->alamat}}</td>
                        <td>{{ $Lowongan->telepon}}</td>
                        <td>{{ $Lowongan->jenis_kelamin}}</td>
                        <td>{{ $Lowongan->pengalaman_kerja}}</td>
                        <td>
                            <form action="{{ route('lowongans.destroy',$Lowongan->nama) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('lowongans.show',$Lowongan->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('lowongans.edit',$Lowongan->nama) }}">Edit</a>
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>

        </div>
    </div>
</body>

</html>