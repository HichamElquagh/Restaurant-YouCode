@extends('layouts.app')

@section('content')

<!-- <div class=" d-flex justify-content-end ">
        <div class=" form-box row mx-4  p- " id="form-bx">
            <div class=" col-md-5 col">
                <form method="POST" id="form" class="form" >
                    <h2 class="  fw-bold text-light mb-3">Login</h2>
                    <div class=" mb-3">
                        <input type="email" class="form-control" id="flo" aria-describedby="emailHelp" name="email"
                           value="" placeholder="Email address" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            placeholder="Password" />
                     </div>
                    <button type="submit" class="btn login-btn text-light" name="login">Login</button>
                    <div class="mt-3">
                        <span class="text-light">Don't have account?</span> <a href="signUp.php" class="text-success">Sign up </a>
                    </div>
                </form>
            </div>
        </div>
    </div> -->


<div class="main-background  container">
    <div class="row justify-content-start mt-5 align-items-center " >
        <div class="  col-md-5">
            
            <div class=" form">
            <div class="  mb-3 text-center fs-3 text-light   ">{{ __('Login') }}</div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end fs-5 text-light">{{ __('Email Address') }}</label> -->

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
                                <button type="submit" class=" card-edit-profile my-2 py-2">
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
