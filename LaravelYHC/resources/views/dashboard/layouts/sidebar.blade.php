<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/users') ? 'active' : '' }}" href="/dashboard/users">
                <span data-feather="users" class="align-text-bottom"></span>
                users 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/mahasiswa') ? 'active' : '' }}" href="/dashboard/mahasiswa">
                <span data-feather="users" class="align-text-bottom"></span>
                mahasiswa 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/prodi') ? 'active' : '' }}" href="/dashboard/prodi">
                <span data-feather="archive" class="align-text-bottom"></span>
                prodi 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/semester') ? 'active' : '' }}" href="/dashboard/semester">
                <span data-feather="archive" class="align-text-bottom"></span>
                semester 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/kelas') ? 'active' : '' }}" href="/dashboard/kelas">
                <span data-feather="archive" class="align-text-bottom"></span>
                kelas 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/tahun') ? 'active' : '' }}" href="/dashboard/tahun">
                <span data-feather="archive" class="align-text-bottom"></span>
                tahun 
              </a>
            </li>
          </ul>
        </div>
      </nav>
      
    </div>
  </div>