<nav class="topnav navbar navbar-light">
  <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
      <i class="fe fe-menu navbar-toggler-icon"></i>
  </button>
  <form class="form-inline mr-auto searchform text-muted">
      <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
  </form>
  <ul class="nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                  <img src="{{ asset('images/qrcode.jpeg') }}" alt="User Avatar" class="avatar-img rounded-circle">
              </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              {{-- <a class="dropdown-item" href="{{ route('logout') }}">Logout</a> --}}
          </div>
      </li>

      <!-- Theme Toggle Button -->
      <li class="nav-item">
          <button id="theme-toggle" class="btn btn-light mt-2">🌙</button> <!-- Dark Mode Icon -->
      </li>
  </ul>
</nav>
