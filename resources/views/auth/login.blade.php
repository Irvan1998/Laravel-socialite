@extends('layouts.app')

@section('content')
<section class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{asset('bg/petani2.png')}}" class="banner-login" alt="">
            </div>
            <div class="col-md-6">
                <div class="card-login">
                    <div class="card-header-login">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-2 offset-md-3" style="    margin: auto;">
                                    <button type="submit" class=" btn-login">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3 sosial-media">
                                    <p class="or">OR</p>
                                    <div class="sosial-media-icon ">
                                        <a href="{{ route('login.google') }}" class=" btn-danger btn-icon"><i class="fa fa-google" aria-hidden="true"></i></a>
                                        <a href="{{ route('login.facebook') }}" class=" btn-primary btn-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="{{ route('login.github') }}" class=" btn-dark btn-icon"><i class="fa fa-github" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection