@extends('layouts.commonMaster')

@section('title', 'Login - ' . config('app.name'))

@section('page-style')
@vite([
    'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('layoutContent')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <div class="card px-sm-6 px-0">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
                <span class="app-brand-logo demo"><x-app-logo-icon /></span>
                <span class="app-brand-text demo text-body fw-bold">{{config('app.name')}}</span>
            </a>
          </div>
          <!-- /Logo -->

          <!-- Content -->
          {{ $slot }}
          <!-- /Content -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
