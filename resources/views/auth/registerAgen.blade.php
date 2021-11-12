@extends('layouts.app')
@section('content')

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleregistercustomer.css">
    <script src="/public/js/javascriptcustomer.js"></script>
    <title>REGISTER AGENSI</title>

</head>

<body>
    <div id="REGISTER_CUSTOMER">
        <svg class="Rectangle_5_hp">
            <rect id="Rectangle_5_hp" rx="73" ry="73" x="0" y="0" width="1515" height="850">
            </rect>
        </svg>
        <div id="REGISTER_CUSTOMER_hq">
            <span>REGISTER AGENSI</span>
        </div>
        <img id="broom_hr" src="{{URL('/img/broom_hr.png')}}">

        <svg class="Path_3" viewBox="0 0 885 655">
            <path id="Path_3" d="M 72 0 L 813 0 C 852.7645263671875 0 885 32.23549652099609 885 72 L 885 583 C 885 622.7645263671875 852.7645263671875 655 813 655 L 72 655 C 32.23549652099609 655 0 622.7645263671875 0 583 L 0 72 C 0 32.23549652099609 32.23549652099609 0 72 0 Z">
            </path>
        </svg>

        <img id="house2" src="{{URL('/img/house2.png')}}">
        <img id="servant_3" src="{{URL('/img/servant_3.png')}}">

        <div class="card-body">
            <form method="POST" action="{{ route('daftaragensi.store') }}">
                @csrf
                <input id="level" type="hidden" class="form-control @error('level') is-invalid @enderror" name="level" value="3" required>

                <div class="form-group row">
                    <label for="nama_agen" class="col-md-4 col-form-label text-md-right">{{ __('nama_agen') }}</label>

                    <div class="col-md-6">
                        <input id="nama_agen" type="text" class="form-control @error('nama_agen') is-invalid @enderror" name="nama_agen" value="{{ old('nama_agen') }}" required autocomplete="nama_agen" autofocus>

                        @error('nama_agen')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('alamat') }}</label>
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
                    <label for="dokumen" class="col-md-4 col-form-label text-md-right">{{ __('dokumen') }}</label>
                    <div class="col-md-6">
                        <input id="dokumen" type="text" class="form-control @error('dokumen') is-invalid @enderror" name="dokumen" required>
                        @error('dokumen')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="penanggung_jawab" class="col-md-4 col-form-label text-md-right">{{ __('penanggung_jawab') }}</label>
                    <div class="col-md-6">
                        <input id="penanggung_jawab" type="text" class="form-control @error('penanggung_jawab') is-invalid @enderror" name="penanggung_jawab" required>
                        @error('penanggung_jawab')
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