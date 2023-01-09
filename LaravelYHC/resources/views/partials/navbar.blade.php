<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">Lebbok</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('mahasiswa') ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('prodi') ? 'active' : '' }}" href="/prodi">Prodi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('semester') ? 'active' : '' }}" href="/semester">Semester</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kelas') ? 'active' : '' }}" href="/kelas">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('tahun') ? 'active' : '' }}" href="/tahun">Tahun</a>
          </li>
       
        </ul>
        
        <ul class="navbar-nav  ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Welcom Back : {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-window"></i> dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> LogOut</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li>
            <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>

        </ul>
      </div>
     
    </div>
  </nav>