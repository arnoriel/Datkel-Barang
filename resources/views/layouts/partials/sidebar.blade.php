<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard') ? '' : 'collapsed' }}" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Data Barang & Supplier</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link {{ Request::is('/supplier') ? '' : 'collapsed' }}" href="/supplier">
              <i class="bi bi-circle"></i><span>Supplier</span>
            </a>
          </li>
          <li>
            <a class="nav-link {{ Request::is('/barang') ? '' : 'collapsed' }}" href="/barang">
              <i class="bi bi-circle"></i><span>Barang</span>
            </a>
          </li>
          <li>
            <a class="nav-link {{ Request::is('/barangmasuk') ? '' : 'collapsed' }}" href="/barangmasuk">
              <i class="bi bi-circle"></i><span>Barang Masuk</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->