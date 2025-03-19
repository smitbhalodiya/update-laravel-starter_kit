@extends('layouts.commonMaster')

@section('title', 'Login - ' . config('app.name'))

@section('page-style')
@vite([
    'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('layoutContent')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="{{url('/')}}" class="auth-cover-brand d-flex align-items-center gap-2">
      <span class="app-brand-logo demo"><x-app-logo-icon /></span>
      <span class="app-brand-text demo text-heading fw-bold">{{config('app.name')}}</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
      <div class="w-100 d-flex justify-content-center">
        <img src="{{asset('assets/img/illustrations/boy-with-rocket-light.png')}}" class="img-fluid" alt="Login image" width="700" data-app-dark-img="illustrations/boy-with-rocket-dark.png" data-app-light-img="illustrations/boy-with-rocket-light.png">
      </div>
    </div>
    <!-- /Left Text -->
    <!-- Content -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
      <div class="w-px-400 mx-auto mt-12 pt-5">
        {{ $slot }}
        <div class="divider my-6">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-facebook me-1_5">
            <i class='bx bxl-facebook-circle'></i>
          </a>

          <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-twitter me-1_5">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>

          <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-github me-1_5">
            <i class='bx bxl-github'></i>
          </a>

          <a href="javascript:;" class="btn btn-sm btn-icon rounded-circle btn-text-google-plus">
            <i class="tf-icons bx bxl-google"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Content -->
  </div>
</div>
@endsection
