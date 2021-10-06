<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HALAMAN UTAMA SESUDAH LOGIN </title>
	<link rel="stylesheet" type="text/css" href="css/stylehalamanutama.css">
</head>

<body>
	<div id="HALAMAN_UTAMA_SESUDAH_LOGIN_">
		<img id="texture_bp" src="{{URL('/img/texture_bp.png')}}">

		<img id="house_bq" src="{{URL('/img/house_bq.png')}}">

		<svg class="Rectangle_1_br">
			<rect id="Rectangle_1_br" rx="50" ry="50" x="0" y="0" width="796" height="731">
			</rect>
		</svg>
		<svg class="Rectangle_2_bs">
			<rect id="Rectangle_2_bs" rx="50" ry="50" x="0" y="0" width="765" height="696">
			</rect>
		</svg>
		<img id="servant_bt" src="{{URL('/img/servant_bt.png')}}">

		<div id="Navbar_bu">
			<svg class="Rectangle_16_bv">
				<rect id="Rectangle_16_bv" rx="0" ry="0" x="0" y="0" width="1920" height="125">
				</rect>
			</svg>
			<div onclick="application.goToTargetView(event)" id="AGEN_ART_bw">
				<span>AGEN ART</span>
			</div>
			<div onclick="application.goToTargetView(event)" id="LOWONGAN_bx">
				<span>LOWONGAN</span>
			</div>
			<div id="MYSERVANT_by">
				<span>MYSERVANT</span>
			</div>
			<div id="HOME_bz">
				<span>HOME</span>
			</div>
			<img id="broom_b" src="{{URL('/img/broom_b.png')}}">

			<img id="search_bar_2_b" src="{{URL('/img/search_bar_2_b.png')}}">

			<div id="Search____b">
				<span>Search . . .</span>
			</div>
			<svg class="Path_1_b" viewBox="0 0 1920 5">
				<path id="Path_1_b" d="M 0 0 L 1920 0">
				</path>
			</svg>
			<div onclick="application.goToTargetView(event)" id="ABOUT_US_b">
				<span>ABOUT US</span>
			</div>
			<img onclick="application.goToTargetView(event)" id="user" src="{{URL('/img/user.png')}}" srcset="user.png 1x, user@2x.png 2x">

		</div>
	</div>
</body>

</html>