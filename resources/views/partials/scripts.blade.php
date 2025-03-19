<!-- BEGIN: Vendor JS-->

@vite([
  'resources/assets/vendor/libs/popper/popper.js',
  'resources/assets/vendor/js/bootstrap.js'
])

<!-- Page Vendor JS-->
@yield('vendor-script')
<!-- END: Page Vendor JS-->

@vite(['resources/js/app.js'])

<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
