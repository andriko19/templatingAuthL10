{{-- header --}}
@include('template/backend/header')
{{-- end header --}}

  <body>
    <div class="wrapper">
        {{-- sidebar --}}
        @include('template/backend/sidebar')
        {{-- end sidebar --}}

      <div class="main-panel">

        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="{{ url('') }}/dashboard" class="logo">
                <img
                  src="{{ url('') }}/assets/backend/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          @include('template/backend/navbar')
          <!-- End Navbar -->
        </div>

        {{-- content --}}
        @yield('konten')
        {{-- end content --}}

        {{-- footer --}}
        @include('template/backend/footer')
        {{-- end footer --}}
      </div>

        <!-- Custom template | don't include it in your project! -->
        {{-- setting color --}}
        @include('template/backend/setting_color')
        {{-- end setting color --}}

      <!-- End Custom template -->
    </div>

    {{-- js --}}
    @include('template/backend/js')
    {{-- end js --}}
  </body>
</html>
