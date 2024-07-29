<!DOCTYPE html>
<!-- beautify ignore:start -->
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Multi-Kreasi</title>

    <meta name="description" content="" />

    @include('admin.asset_navbar')

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->
          @include('admin.sidebar')
          <!-- / Menu -->
          
          <!-- Layout container -->
          <div class="layout-page">
            
            
            <!-- Navbar -->
            @include('admin.navbar')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
                @yield('content')
              {{-- </div> --}}
              <!-- / Content -->

              <!-- Footer -->
              <!-- / Footer -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('admin.asset_footer')

  </body>
</html>
