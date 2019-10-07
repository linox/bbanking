<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BBanking | Internet banking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('/assets/font/iconsmind-s/css/iconsminds.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/font/simple-line-icons/css/simple-line-icons.css')}}" />

    <link rel="stylesheet" href="{{url('/assets/css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/vendor/bootstrap-float-label.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/main.css')}}" />
</head>

<body class="background show-spinner">
<div class="fixed-background"></div>
<main>
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <br/>
                        <br/>
                        <br/>
                        <p class="white mb-0">
                            Seu novo banco digital.
                            <br>Simples, fácil, viável.<br/><br/>Ainda não tem conta? <br/><a href="#" class="white">Cadastre-se agora!</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <a href="#">
                            <span class="logo-single"></span>
                        </a>
                        <h6 class="mb-4">Login</h6>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" name="email" />
                                <span>E-mail</span>
                            </label>

                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" name="password" type="password" placeholder="" />
                                <span>SENHA</span>
                            </label>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#">Esqueceu sua senha?</a>
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">ENTRAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="{{url('/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('/assets/js/dore.script.js')}}"></script>
<script src="{{url('/assets/js/scripts.js')}}"></script>

</body>

</html>




{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
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
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
