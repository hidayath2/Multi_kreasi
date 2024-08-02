<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar"
>


<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
  <!-- Search -->
  {{-- <div class="navbar-nav align-items-center">
    <div class="nav-item d-flex align-items-center">
      Percetakan
    </div>
  </div> --}}
  <!-- /Search -->
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bi bi-justify"></i>
    </a>
  </div>

  <ul class="navbar-nav flex-row align-items-center ms-auto">

    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
      <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        Selamat Datang, {{ auth()->user()->username }}
        {{-- <div class="avatar avatar-online"> --}}
        {{-- <div class="avatar">
          <img src="{{ asset('images/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
        </div> --}}
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a class="dropdown-item" href="#">
            {{-- <div class="d-flex"> --}}
              {{-- <div class="flex-shrink-0 me-3">
                {{-- <div class="avatar avatar-online"> --}
                <div class="avatar">
                  <img src="{{ asset('images/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                </div>
              </div> --}}
              {{-- <div class="flex-grow-1">
                <span class="fw-semibold d-block">{{ auth()->user()->username }}</span>
                {{-- <span class="fw-semibold d-block">username</span> --}
                <small class="text-muted">User</small>
              </div> --}}
            {{-- </div> --}}
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <a class="dropdown-item" href="/user">
            {{-- <i class="bx bx-user me-2"></i> --}}
            <span class="align-middle">My Profile</span>
          </a>
        </li>
        <li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">
              Log Out
              {{-- <i class="bx bx-power-off me-2">Log Out</i> --}}
              {{-- <span class="align-middle">Log Out</span> --}}
            </button>
            </form>
        </li>
      </ul>
    </li>
    <!--/ User -->
  </ul>
</div>
</nav>