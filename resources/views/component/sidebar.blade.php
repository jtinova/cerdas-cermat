  <!-- ======= Sidebar ======= -->
  @if (auth()->user()->level === 'admin')
      <aside id="sidebar" class="sidebar">

          <ul class="sidebar-nav" id="sidebar-nav">

              <li class="nav-item">
                  <a class="nav-link " href="{{ route('dashboard') }}">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li><!-- End Dashboard Nav -->

              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                      href="#">
                      <i class="bi bi-menu-button-wide"></i><span>Manajemen</span><i
                          class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                      <li>
                          <a href="{{ route('user') }}">
                              <i class="bi bi-people"></i><span>User</span>
                          </a>
                      </li>
                  </ul>
              </li>
              <!-- End Manajemen Nav -->

              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#ujian-nav" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-menu-button-wide"></i><span>Ujian</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="ujian-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                      <li>
                          <a href="/pakets">
                              <i class="bi bi-circle"></i><span>Bank Soal</span>
                          </a>
                      </li>
                  </ul>
              </li>
              <!-- End Manajemen Nav -->

          </ul>

      </aside><!-- End Sidebar-->
  @elseif (auth()->user()->level === 'peserta')
      <aside id="sidebar" class="sidebar">

          <ul class="sidebar-nav" id="sidebar-nav">

              <li class="nav-item">
                  <a class="nav-link " href="{{ route('dashboard') }}">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li><!-- End Dashboard Nav -->
      </aside><!-- End Sidebar-->
  @endif
