<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>

  <nav class="vertnav navbar navbar-light">
      <!-- logo -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ url('/') }}">
          <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="50" height="50">
      </a>
      
      </div>

      <!-- Navigation Menu -->
      <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('dashboard') }}">
                  <i class="fe fe-home fe-16"></i>
                  <span class="ml-3 item-text">Dashboard</span>
              </a>
          </li>

          <li class="nav-item dropdown">
              <a href="#formsSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
                  <i class="fe fe-file fe-16"></i>
                  <span class="ml-3 item-text">Forms</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="formsSubmenu">
                  <li class="nav-item">
                      <a class="nav-link pl-3" href="{{ route('forms.input') }}">
                          <span class="ml-1">Input Form</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link pl-3" href="{{ route('forms.select') }}">
                          <span class="ml-1">Select Form</span>
                      </a>
                  </li>
              </ul>
          </li>

          <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('reports') }}">
                  <i class="fe fe-bar-chart-2 fe-16"></i>
                  <span class="ml-3 item-text">Reports</span>
              </a>
          </li>
      </ul>

      <!-- Bottom Help Link -->
      <p class="text-muted nav-heading mt-4 mb-1">
          <span>Help</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('help') }}">
                  <i class="fe fe-help-circle fe-16"></i>
                  <span class="ml-3 item-text">Support</span>
              </a>
          </li>
      </ul>

      <!-- Theme Toggle Button (Add this section) -->
      <div class="theme-toggle mt-3">
          <button id="theme-toggle-sidebar" class="btn btn-light">
              <i class="fe fe-moon fe-16"></i> <!-- Moon icon for dark mode -->
          </button>
      </div>
  </nav>
</aside>
