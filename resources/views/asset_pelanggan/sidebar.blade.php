<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a style="text-decoration: none" href="" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Percetakan</span>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ ($title === "pemesanan") ? 'active' : '' }}">
        <a style="text-decoration: none" href="/pemesanan" class="menu-link">
          {{-- <i class="menu-icon tf-icons bx bx-home-circle"></i> --}}
          <i class="menu-icon tf-icons bi bi-plus-circle-fill"></i>
          <div data-i18n="Analytics">Pemesanan</div>
        </a>
      </li>
    </ul>
  </aside>