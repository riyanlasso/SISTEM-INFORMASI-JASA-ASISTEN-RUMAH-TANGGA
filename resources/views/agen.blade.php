<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styleagen.css">
	<title>AGEN ART</title>

</head>

<body>
	<!-- <div id="AGEN_ART">
		<img id="texture_b" src="{{URL('/img/texture_b.png')}}">

		<div id="Group_5">
			<div id="AGEN_ART_ca">
				<span>AGEN ART</span>
			</div>
			<svg class="Line_2" viewBox="0 0 202 3">
				<path id="Line_2" d="M 0 0 L 202 0">
				</path>
			</svg>
			<svg class="Rectangle_10">
				<rect id="Rectangle_10" rx="0" ry="0" x="0" y="0" width="1741" height="266">
				</rect>
			</svg>
			<svg class="Rectangle_11">
				<rect id="Rectangle_11" rx="0" ry="0" x="0" y="0" width="1741" height="266">
				</rect>
			</svg>
			<svg class="Rectangle_13">
				<rect onclick="application.goToTargetView(event)" id="Rectangle_13" rx="30.5" ry="30.5" x="0" y="0" width="206" height="61">
				</rect>
			</svg>
			<svg class="Rectangle_14">
				<rect onclick="application.goToTargetView(event)" id="Rectangle_14" rx="30.5" ry="30.5" x="0" y="0" width="206" height="61">
				</rect>
			</svg>
			<div onclick="application.goToTargetView(event)" id="BACK">
				<span>BACK</span>
			</div>
			<div onclick="application.goToTargetView(event)" id="NEXT">
				<span>NEXT</span>
			</div>
			<img onclick="application.goToTargetView(event)" id="company" src="{{URL('/img/company.png')}}">

			<img onclick="application.goToTargetView(event)" id="company_cj" src="{{URL('/img/company_cj.png')}}">

			<div id="Nama_Agen__abcd_">
				<span>Nama Agen : abcd </span>
			</div>
			<div id="Alamat__abcd">
				<span>Alamat : abcd</span>
			</div>
			<div id="No_Telepon__12345_">
				<span>No Telepon : 12345 </span>
			</div>
			<div id="Rating__50__50_">
				<span>Rating : 5.0 / 5.0 </span>
			</div>
			<div id="Nama_Agen__abcd__co">
				<span>Nama Agen : abcd </span>
			</div>
			<div id="Alamat__abcd_cp">
				<span>Alamat : abcd</span>
			</div>
			<div id="No_Telepon__12345__cq">
				<span>No Telepon : 12345 </span>
			</div>
			<div id="Rating__50__50__cr">
				<span>Rating : 5.0 / 5.0 </span>
			</div>
		</div> -->
	<!-- <div id="Navbar_cs">
		<svg class="Rectangle_16_ct">
			<rect id="Rectangle_16_ct" rx="0" ry="0" x="0" y="0" width="1920" height="125">
			</rect>
		</svg>
		<div id="AGEN_ART_cu">
			<span>AGEN ART</span>
		</div>
		<div id="LOWONGAN_cv">
			<span>LOWONGAN</span>
		</div>
		<div id="MYSERVANT_cw">
			<span>MYSERVANT</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="HOME_cx">
			<span>HOME</span>
		</div>
		<img id="broom_cy" src="{{URL('/img/broom_cy.png')}}">

		<img id="search_bar_2_cz" src="{{URL('/img/search_bar_2_cz.png')}}">

		<div id="Search____c">
			<span>Search . . .</span>
		</div>
		<svg class="Path_1_c" viewBox="0 0 1920 5">
			<path id="Path_1_c" d="M 0 0 L 1920 0">
			</path>
		</svg>
		<div onclick="application.goToTargetView(event)" id="ABOUT_US_c">
			<span>ABOUT US</span>
		</div>
		<img id="user_c" src="{{URL('/img/user_c.png')}}">

	</div> -->
	@extends('agens.layout')
	<div class="row">
		<div class="col-lg-12 margin-tb">

			<div class="pull-left mt-2">
				<h2>DAFTAR AGENSI</h2>
			</div>

			<div class="float-right my-2">
				<a class="btn btn-success" href="{{ route('agens.create') }}"> Input Mahasiswa</a>
			</div>

		</div>

		<div>
			<div class="mx-auto pull-right">
				<div class="">
					<form action="{{ route('agens.index') }}" method="GET" role="search">

						<div class="input-group">
							<span class="input-group-btn mr-5 mt-1">
								<button class="btn btn-info" type="submit" value="Cari" title="Search mahasiswa">Cari</button>
								<span class="fas fa-search"></span>
								</button>
							</span>
							<input type="text" class="form-control mr-2" name="term" placeholder="Search nama" id="term">
							<a href="{{ route('agens.index') }}" class=" mt-1">
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



</body>

</html>