@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <title>LOGIN</title>
</head>

<body>
    <div id="LOGIN">
        <svg class="Rectangle_5">
            <rect id="Rectangle_5" rx="98" ry="98" x="0" y="0" width="1526" height="978">
            </rect>
        </svg>
        <img id="morning" src="{{URL('img/morning.png')}}">

        <div id="MYSERVANT_d">
            <span>MYSERVANT</span>
        </div>
        <img id="broom_d" src="{{URL('img/broom.png')}}">

        <img id="pngwingcom_1" src="{{URL('img/pngwingcom_1.png')}}">

        <img id="servant_2" src="{{URL('img/servant_2.png')}}">

        <svg class="Rectangle_6">
            <rect id="Rectangle_6" rx="36" ry="36" x="0" y="0" width="401" height="480">
            </rect>
        </svg>

        <form class="box" method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login</h1>
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="" value="Login">
        </form>


        <div id="not_registered">
            <span>not registered?</span>
        </div>
        <div id="REGISTER" class="dropdown">
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    REGISTER
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('register')}}">Register Customer</a>
                    <a class=" dropdown-item" href="{{ route('register')}}">Register Agen</a>
                </div>
            </div>
        </div>

        <img id="broom_ed" src="{{URL('img/broom_ed.png')}}">

    </div>
</body>

</html>
@endsection