@extends('layouts.app')
@section('content')
<div class=" container d-flex flex-column justify-content-between ">
    <form 

            id="formAccountSettings" 
            method="POST" 
            action="{{ route('profile.update',auth()->id()) }}" 
            enctype="multipart/form-data"
            class="needs-validation" 
            role="form"
            novalidate
        >
        @csrf
   
        <div class="card-body">
            <div class="card-edit-profile">
            <div class="mb-3 text-start fs-5 text-light"><h2 class="text-center ">{{('Profile Information')}}</h2>
            {{('Update your accounts profile information and email address')}}</div>
                <div class="mb-3 col-md-6">
                <div class="label-name">{{ __('Name') }}</div>
                    
                    <input class="form-control p-3 inputs-form text-light " type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                    <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
                </div>
                <div class="mb-3 col-md-6">
                <div class="label-name">{{ __('Email Address') }}</div>
                    <input class="form-control p-3 inputs-form text-light " type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                    <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="button-create  my-2 px-4 py-2 ">{{'Update'}}</button>
                </div>
            </div>
        </div>
</form>
<form id="formAccountSettings" method="POST" action="{{ route('profile.update.password',auth()->id()) }}" 
enctype="multipart/form-data"
class="needs-validation" 
role="form"
novalidate
>
@csrf

<div class="card-body my-4">
<div class="card-edit-profile">
<div class="mb-3 text-start fs-5 text-light"><h2 class="text-center ">{{('Update Password')}}</h2>
{{('
Ensure your account is using a long, random password to stay secure.')}}</div>
    <div class="mb-3 col-md-6">
    <div class="label-name">{{ __('Current Password ') }}</div>
        <input class="form-control p-3 inputs-form text-light " type="text" id="name" name="old_password" value="" autofocus="" required>
    </div>
    <div class="mb-3 col-md-6">
    <div class="label-name">{{ __('New Password ') }}</div>
        <input class="form-control p-3 inputs-form text-light " type="password" id="email" name="password" value="" placeholder="">
    </div>
    <div class="mb-3 col-md-6">
    <div class="label-name">{{ __(' Confirm Password ') }}</div>
        <input class="form-control p-3 inputs-form text-light " type="password" id="email" name="password_confirmation" value="" placeholder="">
    </div>
    <div class="mt-2">
        <button type="submit" class="button-create  my-2 px-4 py-2 ">{{'Update'}}</button>
    </div>
</div>
</div>
</form>
</div>

@endsection