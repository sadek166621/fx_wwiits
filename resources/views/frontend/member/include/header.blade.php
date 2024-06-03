<style>
    @media (max-width: 767px) {
        .site_name{
            width: 65%;
        }
    }
    @media (min-width: 768px) and (max-width: 1920px) {
        .site_name{
            width: 80%;
        }
    }
</style>
<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <!-- Logo -->
        <a href="{{route('home')}}" class="logo">
            <!-- logo-->
{{--            <div class="logo-mini w-30">--}}
{{--                <span class="light-logo"><img src="{{asset('new-assets')}}/assets/images/FX-logo.png" alt=""></span>--}}
{{--                <span class="dark-logo"><img src="{{asset('new-assets')}}/assets/images/FX-logo.png" alt=""></span>--}}
{{--            </div>--}}
            <div class="logo-lg">
                <span class="light-logo"><img src="{{asset('new-assets')}}/assets/images/FX-logo.png" alt=""></span>
                <span class="dark-logo"><img src="{{asset('new-assets')}}/assets/images/FX-logo.png" alt=""></span>
            </div>
        </a>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class=" btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-outline no-border" data-toggle="push-menu" role="button">
                        <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
                    </a>

                </li>
{{--                <li class="d-none btn-group d-lg-inline-flex d-none">--}}
{{--                    <div class="app-menu">--}}
{{--                        <div class="search-bx mx-5">--}}
{{--                            <form>--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <button class="btn" type="submit" id="button-addon3"><img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/search.svg" class="img-fluid svg-icon" alt=""></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="d-none btn-group nav-item d-none d-xl-inline-block">--}}
{{--                    <a href="extra_calendar.html" class="waves-effect waves-light nav-link btn-outline no-border svg-bt-icon" title="Chat">--}}
{{--                        <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/event.svg" class="img-fluid svg-icon" alt="">--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="d-none btn-group nav-item d-none d-xl-inline-block">--}}
{{--                    <a href="extra_taskboard.html" class="waves-effect waves-light btn-outline no-border nav-link svg-bt-icon" title="Taskboard">--}}
{{--                        <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/correct.svg" class="img-fluid svg-icon" alt="">--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <div class="site_name">
            <marquee behavior="" direction="" class="text-white">{{getSetting()->site_title}}</marquee>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-outline no-border full-screen" title="Full Screen">
                        <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
                    </a>
                </li>
                <!-- Notifications -->
                <li class="dropdown notifications-menu d-none">
                    <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border" data-bs-toggle="dropdown" title="Notifications">
                        <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/notifications.svg" class="img-fluid svg-icon" alt="">
                    </a>
                    <ul class="dropdown-menu animated bounceIn">

                        <li class="header d-none">
                            <div class="p-20">
                                <div class="flexbox">
                                    <div>
                                        <h4 class="mb-0 mt-0">Notifications</h4>
                                    </div>
                                    <div>
                                        <a href="#" class="text-danger">Clear All</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu sm-scrol">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border" data-bs-toggle="dropdown" title="User">
                        <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/user.svg" class="img-fluid svg-icon" alt="">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li>
{{--                            <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>--}}
                            <a class="dropdown-item" href="{{route('profile-settings')}}"><i class="ti-user text-muted me-2"></i>Profile Setting</a>
{{--                            <div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="{{route('student-logout')}}"><i class="ti-lock text-muted me-2"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li class="d-none">
                    <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light btn-outline no-border">
                        <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/settings.svg" class="img-fluid svg-icon" alt="">
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</header>
