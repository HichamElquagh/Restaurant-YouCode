@extends('layouts.app')

@section('content')




<div class="main-background  container">
    <div class="row justify-content-start mt-5 align-items-center " >
        <div class="  col-lg-5 col-md-8">
            
            <div class=" form">
            <div class="  mb-3 text-center fs-3 text-light   ">{{ __('Login') }}</div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end fs-5 text-light"></label> -->

                            <div class="col-md-12">
                                <div class="label-name">{{ __('Email Address') }}</div>
                                <input id="email" type="email" class="form-control  p-3 inputs-form text-light  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label  fs-5 text-light text-md-end">{{ __('Password') }}</label> -->

                            <div class="col-md-12">
                            <div class="label-name">{{ __('Password') }}</div>
                                <input id="password" type="password" class="form-control p-3 inputs-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row  mb-3">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label fs-5 text-light " for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class=" col-md-8 ">
                                <button type="submit" class=" button-create my-2 py-2 px-4">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link fs-5 text-light " href="{{ route('password.request') }}">
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
</div>
@endsection
