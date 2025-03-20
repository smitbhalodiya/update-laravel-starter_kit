<!-- BEGIN: Vendor JS-->

<!-- laravel style -->
@vite(['resources/assets/vendor/js/helpers.js'])

@vite([
  'resources/assets/vendor/libs/jquery/jquery.js',
  'resources/assets/vendor/js/bootstrap.js',
  'resources/assets/vendor/js/menu.js'
])

<!-- Page Vendor JS-->
@yield('vendor-script')
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
@vite(['resources/assets/js/main.js'])

@vite(['resources/js/app.js'])

<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
