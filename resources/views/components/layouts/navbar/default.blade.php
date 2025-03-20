<nav
  class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
  id="layout-navbar">
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
      <i class="icon-base bx bx-menu icon-md"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
    <!-- Search -->
    <div class="navbar-nav align-items-center me-auto">
      <div class="nav-item d-flex align-items-center">
        <span class="w-px-22 h-px-22"><i class="icon-base bx bx-search icon-md"></i></span>
        <input
          type="text"
          class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
          placeholder="Search..."
          aria-label="Search..." />
      </div>
    </div>
    <!-- /Search -->

    <ul class="navbar-nav flex-row align-items-center ms-md-auto">
      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <!-- Check if the user is authenticated -->
        @if (Auth::check())
          <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ Auth::user()->profile_photo_url ?? asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('settings.profile') }}">Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('settings.password') }}">Password</a></li>
            <li><a class="dropdown-item" href="{{ route('settings.appearance') }}">Settings</a></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">Log Out</button>
              </form>
            </li>
          </ul>
        @else
          <!-- If the user is not logged in, show the login option -->
          <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('login') }}">Log In</a></li>
          </ul>
        @endif
      </li>
      <!--/ User -->
    </ul>
  </div>
</nav>
