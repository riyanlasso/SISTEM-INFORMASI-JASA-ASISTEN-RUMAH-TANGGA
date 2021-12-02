@extends('layouts.app')
@section('content')

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleregisterART.css">
    <script src="/public/js/javascriptcustomer.js"></script>
    <title>REGISTER ART</title>



</head>

<body>
    <div id="REGISTER_CUSTOMER">
        <svg class="Rectangle_5_hp">
            <rect id="Rectangle_5_hp" rx="73" ry="73" x="0" y="0" width="1515" height="1100">
            </rect>
        </svg>
        <div id="REGISTER_CUSTOMER_hq">
            <span>REGISTER ART</span>
        </div>
        <img id="broom_hr" src="{{URL('/img/broom_hr.png')}}">



        <img id="house2" src="{{URL('/img/house2.png')}}">
        <img id="servant_3" src="{{URL('/img/servant_3.png')}}">

        <div class="card-body">
            <form method="POST" action="{{ route('daftarart.store') }}">
                @csrf
                <input id="level" type="hidden" class="form-control @error('level') is-invalid @enderror" name="level" value="4" required>

                <div class="form-group row">
                    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                    <div class="col-md-6">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                    <div class="col-md-6">
                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telepon" class="col-md-4 col-form-label text-md-right">{{ __('telepon') }}</label>
                    <div class="col-md-6">
                        <input id="telepon" type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" required>
                        @error('telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">{{ __('jenis_kelamin') }}</label>
                    <div class="col-md-6">
                        <input id="jenis_kelamin" type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required>
                        @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telepon" class="col-md-4 col-form-label text-md-right">{{ __('umur') }}</label>
                    <div class="col-md-6">
                        <input id="umur" type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" required>
                        @error('umur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-md-4 col-form-label text-md-right">{{ __('agama') }}</label>
                    <div class="col-md-6">
                        <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" required>
                        @error('agama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kota" class="col-md-4 col-form-label text-md-right">{{ __('kota') }}</label>
                    <div class="col-md-6">
                        <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" required>
                        @error('kota')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="provinsi" class="col-md-4 col-form-label text-md-right">{{ __('provinsi') }}</label>
                    <div class="col-md-6">
                        <input id="provinsi" type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" required>
                        @error('provinsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gaji_minimum" class="col-md-4 col-form-label text-md-right">{{ __('gaji_minimum') }}</label>
                    <div class="col-md-6">
                        <input id="gaji_minimum" type="text" class="form-control @error('gaji_minimum') is-invalid @enderror" name="gaji_minimum" required>
                        @error('telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gaji_harapan" class="col-md-4 col-form-label text-md-right">{{ __('gaji_harapan') }}</label>
                    <div class="col-md-6">
                        <input id="gaji_harapan" type="text" class="form-control @error('gaji_harapan') is-invalid @enderror" name="gaji_harapan" required>
                        @error('gaji_harapan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengalaman_kerja" class="col-md-4 col-form-label text-md-right">{{ __('pengalaman_kerja') }}</label>
                    <div class="col-md-6">
                        <input id="pengalaman_kerja" type="text" class="form-control @error('pengalaman_kerja') is-invalid @enderror" name="pengalaman_kerja" required>
                        @error('telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="upload" class="col-md-4 col-form-label text-md-right">{{ __('upload') }}</label>
                    <div class="col-md-6">
                        <input id="upload" type="text" class="form-control @error('upload') is-invalid @enderror" name="upload" required>
                        @error('telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0" style="margin-left:300px">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>

</body>
@endsection