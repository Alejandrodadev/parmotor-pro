@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/blankLayout')

@section('title', '2 Factor Challenge')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover authentication-bg">
  <div class="authentication-inner row">

    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 p-0">
      <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/images/logo/logo_new_corto.png') }}" alt="" width="280" height="80" class="img-fluid my-5 auth-illustration">
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Two Steps Verification -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-4 p-sm-5">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-5">
            <span> <img src="{{ asset('assets/images/logo/small.png') }}" alt="" width="45" height="80"></span>
          </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-3">Two Step Verification 💬</h4>
        <div x-data="{ recovery: false }">
          <div class="mb-3" x-show="! recovery">
            Please confirm access to your account by entering the authentication code.
          </div>

          <div class="mb-3" x-show="recovery">
            Please confirm access to your account by entering one of your emergency recovery codes.
          </div>

          <x-validation-errors class="mb-1" />

          <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <div class="mb-3" x-show="! recovery">
              <x-label class="form-label" value="{{ __('Code') }}" />
              <x-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
              <x-input-error for="code"></x-input-error>
            </div>

            <div class="mb-3" x-show="recovery">
              <x-label class="form-label" value="{{ __('Recovery Code') }}" />
              <x-input class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
              <x-input-error for="recovery_code"></x-input-error>
            </div>

            <div class="d-flex justify-content-end my-2 gap-2">
              <button type="button" class="btn btn-outline-secondary me-1" x-show="! recovery" x-on:click="recovery = true; $nextTick(() => { $refs.recovery_code.focus()})">Use a recovery code
              </button>

              <button type="button" class="btn btn-outline-secondary me-1" x-show="recovery" x-on:click=" recovery = false; $nextTick(() => { $refs.code.focus() })">
                Use an authentication code
              </button>
            </div>
            <div class="d-flex">
              <button class="btn btn-info w-100" type="submit">Log in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
