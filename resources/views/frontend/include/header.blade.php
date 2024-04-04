<header class="nav-background">
    <!-- Nav Bar Start -->
    <section class="menu-section-area ">
      <nav class="navbar sticky-header navbar-expand-lg nav-background fixed-top px-md-5" id="mainNav">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}"><img class="header-logo" src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" alt="Logo"
              ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="main-menu-collapse collapse navbar-collapse" id="navbarSupportedContent" sty>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="text-decoration-none fw-semibold text-light m-3 hover" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false" style="text-shadow: 0 0 1px #000000, 0 0 4px #000000;">
                  Pages <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('blog') }}"style="
    color: black!important;
">Blogs</a></li>
                  <li><a class="dropdown-item" href="{{ route('about') }}"style="
    color: black!important;
">About</a></li>
                  <li><a class="dropdown-item" href="{{ route('contact') }}"style="
    color: black!important;
">Contact</a></li>
                  <li><a class="dropdown-item" href="{{ route('support') }}"style="
    color: black!important;
">Support</a></li>
                  <li><a class="dropdown-item" href="{{ route('privact-policy') }}"style="
    color: black!important;
">Privacy Policy</a></li>
                  <li><a class="dropdown-item" href="{{ route('cookie-policy') }}"style="
    color: black!important;
">Cookie Policy</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="text-decoration-none fw-semibold text-light m-3" aria-current="page" href="#"style="text-shadow: 0 0 1px #000000, 0 0 4px #000000;">Fourm</a>
              </li>
              <li class="nav-item">
                <a class="text-decoration-none fw-semibold text-light m-3" aria-current="page" href="{{ route('blog') }}"style="text-shadow: 0 0 1px #000000, 0 0 4px #000000;">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="text-decoration-none fw-semibold text-light m-3" aria-current="page" href="{{ route('contact') }}"style="text-shadow: 0 0 1px #000000, 0 0 4px #000000;">Contact</a>
              </li>
              <li class="nav-item menu-round-btn menu-cart-btn">
                <a class="nav-link menu-cart-btn" aria-current="page"
                    href="#">
                    <i data-feather="shopping-bag"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cartQuantity">
                        0
                    </span>
                </a>
            </li>
            </ul>
            <form class="d-flex flex-column flex-md-row">
                @if(session()->has('StudentId'))
                <a class=" d-flex justify-content-center align-items-center fw-bold pri-btn m-2" aria-current="page"
                href="{{ route('student.dashboard') }}">My Dashboard</a>
                @else
              <a class=" d-flex justify-content-center align-items-center fw-bold pri-btn m-2" aria-current="page"
                href="{{ route('student.signin') }}">Sign In</a>

              <a class=" d-flex justify-content-center align-items-center fw-bold pri-btn m-2" aria-current="page"
                href="{{ route('admin.signin') }}">Admin Login</a>
              <a class=" d-flex justify-content-center align-items-center fw-bold pri-btn m-2" aria-current="page"
                href="{{ route('sub.admin.signin') }}">Subadmin Login</a>
                @endif
            </form>
          </div>
        </div>
      </nav>
    </section>
    <!-- Nav Bar End -->
  </header>
