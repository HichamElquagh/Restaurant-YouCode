@extends('layouts.app')

@section('content')
<div class=" main-background container">
    <div class="row justify-content-start">
        <div class=" col-lg-5 col-md-8">
            <div class="form">
                <div class="mb-3 text-center fs-3 text-light">{{ __('Register') }}</div>

                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                            <div class="col-md-10">
                            <div class="label-name">{{ __('Name') }}</div>
                                <input id="name" type="text" class="form-control  p-3 inputs-form text-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                            <div class="col-md-10">
                            <div class="label-name">{{ __('Email Address') }}</div>
                                <input id="email" type="email" class="form-control  p-3 inputs-form text-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="col-md-10">
                            <div class="label-name">{{ __('Password') }}</div>
                                <input id="password" type="password" class="form-control  p-3 inputs-form text-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-10">
                            <div class="label-name">{{ __('Confirm Password') }}</div>
                                <input id="password-confirm" type="password"  class="form-control  p-3 inputs-form text-light" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button-create my-2 py-2 px-4"">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
