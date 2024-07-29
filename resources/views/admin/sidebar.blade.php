<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Admin</span>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ ($title === "pelanggan") ? 'active' : '' }}">
        <a style="text-decoration: none" href="/pelanggan" class="menu-link">
          {{-- <i class="menu-icon tf-icons bx bx-home-circle"></i> --}}
          <i class="menu-icon tf-icons bi bi-people-fill"></i> 
          <div data-i18n="Analytics">Pelanggan</div>
        </a>
      </li>
      <li class="menu-item {{ ($title === "pesanan") ? 'active' : '' }}">
        <a style="text-decoration: none" href="/pesanan" class="menu-link">
          <i class="menu-icon tf-icons bi bi-clipboard-minus-fill"></i>
          <div data-i18n="Analytics">Pesanan</div>
          <div class="badge bg-danger" id="data_surat_masuk" style="margin-left: 10px">10</div>
        </a>
      </li>
      {{-- <li class="menu-item {{ ($title === "pelunasan") ? 'active' : '' }}">
        <a style="text-decoration: none" href="/pelunasan" class="menu-link">
          <i class="menu-icon tf-icons  bi bi-check-circle-fill"></i>
          <div data-i18n="Analytics">Pelunasan</div>
        </a>
      </li> --}}
      <li class="menu-item {{ ($title === "jenispercetakan") ? 'active' : '' }}">
        <a style="text-decoration: none" href="/jenispercetakan" class="menu-link">
          <i class="menu-icon tf-icons bi bi-filter-square-fill"></i>
          <div data-i18n="Analytics">Jenis Percetakan</div>
        </a>
      </li>
    </ul>
  </aside>