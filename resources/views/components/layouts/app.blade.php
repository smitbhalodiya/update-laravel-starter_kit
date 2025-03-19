<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="layout-menu-fixed" data-base-url="{{url('/')}}" data-framework="laravel">
  <head>
    @include('partials.head')
  </head>

  <body>
    <!-- Layout Content -->
    <x-layouts.menu.vertical :title="$title ?? null">
      {{ $slot }}
    </x-layouts.menu.vertical>
    <!--/ Layout Content -->

    <!-- Include Scripts -->
    @include('partials.scripts')
    <!-- / Include Scripts -->
  </body>
</html>
