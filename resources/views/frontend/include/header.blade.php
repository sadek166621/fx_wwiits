
@php
  $route = Route::current()->getName();
@endphp
  <header>
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{asset('new-assets')}}/assets/images/FX-logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                                aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse fixed-height" id="main_menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link {{ ($route == 'home')? 'active':'' }}" href="{{route('home')}}">Home
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ ($route == 'about')? 'active':'' }} " href="{{route('about')}}">About
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ ($route == 'deposit')? 'active':'' }}" href="{{route('deposit')}}">Deposit
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ ($route == 'training')? 'active':'' }}" href="{{route('training')}}">Training
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ ($route == 'faq')? 'active':'' }}" href="{{route('faq')}}">FAQ
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ ($route == 'contact')? 'active':'' }}" href="{{route('contact')}}">Contact
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="nav-button">
                                @if(session()->has('StudentId'))
                                @if ($route == 'profile-settings')
                                <a href="{{ route('student-logout') }}" style="text-decoration: none;" class="base-btn2"> Logout</a>
                                @elseif ($route == 'deposit-packages')
                                <a href="{{ route('student-logout') }}" style="text-decoration: none;" class="base-btn2"> Logout</a>
                                @elseif ($route == 'deposit.list')
                                <a href="{{ route('student-logout') }}" style="text-decoration: none;" class="base-btn2"> Logout</a>
                                @elseif ($route == 'reference')
                                <a href="{{ route('student-logout') }}" style="text-decoration: none;" class="base-btn2"> Logout</a>
                                @elseif ($route == 'passbook')
                                <a href="{{ route('student-logout') }}" style="text-decoration: none;" class="base-btn2"> Logout</a>
                                @else
                                <a href="{{ route('profile-settings') }}" class="base-btn2"> My Dashboard</a>
                                @endif
                                @else
                                <a href="{{ route('student.signin') }}" class="base-btn2"> Login</a>
                                <a href="{{ route('student.signup') }}" class="base-btn2"> Register</a>
                                @endif

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
