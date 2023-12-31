@php
  $customizerHidden = 'customizer-hide';
  $configData = Helper::appClasses();
@endphp

@extends('layouts.blankLayout')

@section('title', 'Register')

@section('page-style')
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

      <!-- Register Card -->
      <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4 mx-auto">
        <div class="w-px-400 mx-auto">
          <!-- Logo -->
          <div class="app-brand justify-content-center mb-5">
            <span> <img src="{{ asset('assets/images/logo/small.png') }}" alt="" width="45" height="80"></span>
            <!-- <span class="app-brand-text demo text-body fw-bold">{{config('variables.templateName')}}</span>-->
            </a>
          </div>

          <h4 class="mb-2">Engine starts here </h4>

          <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name"
                     placeholder="johndoe" autofocus value="{{ old('name') }}"/>
              @error('name')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                     placeholder="john@example.com" value="{{ old('email') }}"/>
              @error('email')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
              @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge @error('password') is-invalid @enderror">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                       name="password"
                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                       aria-describedby="password"/>
                <span class="input-group-text cursor-pointer">
                <i class="ti ti-eye-off"></i>
              </span>
              </div>
              @error('password')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
              @enderror
            </div>

            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password-confirm">Confirm Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                       aria-describedby="password"/>
                <span class="input-group-text cursor-pointer">
                <i class="ti ti-eye-off"></i>
              </span>
              </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
              <div class="mb-1">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" name="terms"/>
                  <label class="form-check-label" for="terms">
                    I agree to the
                    <a href="{{ route('terms.show') }}" target="_blank">
                      terms_of_service
                    </a> and
                    <a href="{{ route('policy.show') }}" target="_blank">
                      privacy_policy
                    </a>
                  </label>
                </div>
              </div>
            @endif
            <button type="submit" class="btn btn-info d-grid w-100">Sign up</button>
          </form>
          <div class="divider my-4">
            <div class="divider-text">or</div>
          </div>
          <p class="text-center mt-2">
            @if (Route::has('login'))
              <a href="{{ route('login') }}">
                <span style="color: #00bad1"> Sign in if you have an account </span>
              </a>
            @endif
          </p>
          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
              <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
              <i class="tf-icons fa-brands fa-google fs-5"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-twitter">
              <i class="tf-icons fa-brands fa-twitter fs-5"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
