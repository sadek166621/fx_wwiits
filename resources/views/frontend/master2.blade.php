<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <meta name="description" content="  ">
    <meta name="keywords" content="">

    <meta name="author" content="zainiktheme">
    <meta name="csrf-token" content="DuauYXFxp1XC3yZoteypbVGi6M4FI2PAcuvm0qXD">

    <meta property="og:type" content="Learning">
    <meta property="og:title" content="">
    <meta property="og:description" content="Learning and Earning Platform">
    <meta property="og:image" content="{{ asset('frontend') }}/uploads/setting/1694024691-8uKkZXEOM9.png">

    <meta name="twitter:card" content="Learning">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="Learning and Earning Platform">
    <meta name="twitter:image" content="{{ asset('frontend') }}/uploads/setting/1694024691-8uKkZXEOM9.png">

    <meta name="msapplication-TileImage" content="{{ asset('frontend') }}/uploads/setting/1694024691-8uKkZXEOM9.png">

    <meta name="msapplication-TileColor" content="rgba(103, 20, 222,.55)">
    <meta name="theme-color" content="#754FFE">


    <!--<title>Guru Digital It - Home</title>-->
    <title>Guru Digital It - Dashbord</title>

    <!--=======================================
          All Css Style link
        ===========================================-->

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend') }}/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('frontend') }}/css/css/jquery-ui.min.css" rel="stylesheet">

    <!-- Font Awesome for this template -->
    <link href="{{ asset('frontend') }}/css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fonts/feather/feather.css">

    <!-- Animate Css-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/css/animate.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/css/venobox.min.css">

    <!-- Sweet Alert css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/admin/sweetalert2/sweetalert2.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/styles.css">

    <link href="{{ asset('frontend') }}/css/css/style.css" rel="stylesheet">

    <link href="frontend/assets/css/extra.css" rel="stylesheet">

    <link href="{{ asset('frontend') }}/css/css/extra.css" rel="stylesheet">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/css/responsive.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" type="image/x-icon">

    <link rel="icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" type="image/png" sizes="16x16">

    <link rel="shortcut icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}">

    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{ asset('frontend') }}/uploads/setting/1694024590-cPqN0ugw1I.png"
        sizes="72x72">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{ asset('frontend') }}/uploads/setting/1694024590-cPqN0ugw1I.png"
        sizes="114x114">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{ asset('frontend') }}/uploads/setting/1694024590-cPqN0ugw1I.png"
        sizes="144x144">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="{{ asset('frontend') }}/uploads/setting/1694024590-cPqN0ugw1I.png">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/datatable/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/datatable/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="/css/vendor/datatable/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Video Player css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/video-player/plyr.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" type="image/x-icon">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/686e4da3bd.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/styles.css">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        :root {
            --white-color: #fff;
            /* --theme-color: #5e3fd7; */
            --light-purple: rgba(117, 79, 254, 0.1);
            /* --heading-color: #040453; */
            --orange-color: #FC8068;
            --orange-deep: #FF3C16;
            /* --para-color: #52526C; */
            --gray-color: #767588;
            --gray-color2: #929292;
            --disable-color: #B5B4BD;
            --color-green: #45C881;
            --color-light-green: rgba(69, 200, 129, 0.22);
            --color-yellow: #FFC014;
            --light-bg: #F9F8F6;
            --page-bg: #F8F6F0;
            /* --plyr-color-main: #5e3fd7; */
            --border-color: rgba(0, 0, 0, 0.07);
            --border-color2: rgba(0, 0, 0, 0.09);
            /* --font-jost: 'Jost', sans-serif; */

            --body-font-family: 'Jost', sans-serif;

            /* New Assigned */
            --theme-color: #2e12ca;
            --plyr-color-main: #ca1212;
            /* --theme-color value set here*/
            --heading-color: #001a69;
            --body-font-color: #0000ff;
            --navbar-bg-color: #43AF8E;
            --gradient-banner-bg: linear-gradient(to right, #10aedf, #72AF41);
            --overlay-bg-opacity: 0;
            --gradient-overlay-bg: rgba(0, 0, 0, 0) !important;
            --footer-gradient-bg: linear-gradient(180deg, #000000, #000000);
        }
    </style>

</head>


<body class="direction-ltr">


    <!-- Header Part Start -->
    <section class="menu-section-area  isLoginMenu ">
        <!-- Navigation -->
        <nav class="navbar sticky-header navbar-expand-lg" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" style="height: 114px;width: 118px;" alt="Logo"
                    ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="main-menu-collapse collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="header-nav-left-side me-auto d-flex">
                    </div>
                    <div class="header-nav-right-side d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="pagesDropdown"
                                    data-bs-toggle="dropdown">Pages <i class="fa-solid fa-angle-down mt-1"></i></a>
                                <ul class="dropdown-menu" style="color: #000000;">
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
                                <a class="nav-link" href="#">Forum</a>
                            </li>
                            {{-- <li class="nav-item">
                                <span class="nav-link">Request Pending</span>
                            </li> --}}


                            {{-- <!-- Menu Cart Option Start -->
                            <li class="nav-item menu-round-btn menu-cart-btn">
                                <a class="nav-link menu-cart-btn" aria-current="page" href="#">
                                    <i data-feather="shopping-bag"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cartQuantity">
                                        0
                                    </span>
                                </a>
                            </li>
                            <!-- Menu Cart Option End --> --}}
                            <!-- Menu User Dropdown Menu Option Start -->
                            <li class="nav-item dropdown menu-round-btn menu-user-btn dropdown-top-space">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                                    <img src="{{ asset('frontend') }}/uploads/default/instructor-default.png" alt="user" class="radius-50">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">

                                    <!-- Dropdown User Info Item Start -->
                                    <div class="dropdown-user-info">
                                        <div class="message-user-item d-flex align-items-center">
                                            <div class="message-user-item-left">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="user-img-wrap position-relative radius-50">
                                                            <img src="{{ asset('frontend') }}/uploads/default/instructor-default.png"
                                                                alt="img" class="radius-50">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <h6 class="color-heading font-14"></h6>
                                                        <p class="font-13"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dropdown User Info Item End -->
                                    {{-- <ul class="user-dropdown-item-box">
                                        <li><a class="dropdown-item" href="#"><span class="iconify"
                                                    data-icon="akar-icons:book"></span>My Learning
                                            </a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="iconify mr-15" data-icon="ic:round-support-agent"></span>
                                                My Consultation
                                            </a>
                                        </li>

                                        <li><a class="dropdown-item" href="#"><span class="iconify"
                                                    data-icon="bx:bx-heart"></span>Wishlist</a>
                                        </li>
                                    </ul> --}}
                                    <ul class="user-dropdown-item-box">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('profile-settings') }}"><span class="iconify"
                                                    data-icon="bytesize:settings"></span>
                                                Profile Settings</a>
                                        </li>


                                    </ul>

                                    <ul class="user-dropdown-item-box">
                                        <li><a class="dropdown-item" href="{{ route('support') }}"><span class="iconify"
                                                    data-icon="bx:bx-help-circle"></span>Help Support
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ route('student-logout') }}"><span class="iconify"
                                                    data-icon="ic:round-logout"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Menu User Dropdown Menu Option End -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navigation -->
    </section>
    <!-- Header Part End -->

    <!-- Main Content Start-->

    <!-- Header Start -->
    @yield('content')



    <!-- Footer Part Start -->
    <footer class="bg-dark text-light mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="co-12 col-md-3 mt-5 pt-5">
                    <div>
                        <a href="{{ route('home') }}"> <img src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" style="height: 182px;width: 188px;margin-left: -33px;"></a>

                    </div>
                    <div class="mt-3 text-white">
                        <a class="text-white" href="https://www.facebook.com/gurudigitalit"><i class="fa-brands fa-facebook me-3"></i></a>
                        <a class="text-white" href="https://www.youtube.com/@GuruDigitalIt"><i class="fa-brands fa-youtube me-3"></i></a>
                        <a class="text-white" href="https://www.tiktok.com/@gurudigitalit?lang=en"><i class="fa-brands fa-tiktok me-3"></i></a>
                        <a class="text-white" href="https://www.pinterest.com/gurudigitalit/"><i class="fa-brands fa-pinterest"></i></a>
                     </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-5 pt-3 pt-md-5">
                    <h5 class="mb-4">Company</h5>
                    <ul class="list-unstyled mb-3">
                        <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('about') }}">About</a></li>
                        <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('privact-policy') }}">FAQ</a></li class="mb-2">
                        <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('blog') }}">Blog</a></li class="mb-2">
                    </ul>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-5 pt-3 pt-md-5">
                    <h5 class="mb-4">Support</h5>
                    <ul class="list-unstyled mb-3">
                        <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('contact') }}">Contact</a></li>
                        <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('support') }}">Support</a></li
                            class="mb-2">
                        <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('course') }}">Courses</a></li
                            class="mb-2">
                    </ul>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-5 pt-3 pt-md-5">
                    <h5 class="mb-4">Contact Info</h5>
                    <p class="text-light"><i class="fa-solid fa-location-dot text-primary"></i> <span class="ms-2">Dhaka</span>
                    </p>
                    <p class="text-light"><i class="fa-solid fa-phone text-primary"></i> <span class="ms-2"><a href="tel:+8801745457430">01745457430</a></span></p>
                    <p class="text-light"><i class="fa-solid fa-envelope text-primary"></i> <span
                        class="ms-2"><a href="mailto:gurudigitalit@gmail.com">gurudigitalit@gmail.com</a>
                      </span></p>
                </div>

                <div class="row copyright-wrapper mt-5">
                    <div class="col-12 col-md-12 col-lg-4">
                      <div class="footer-payment">

                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                      <div class="copyright-text text-center">
                        <p class="text-white font-13"> <i class="fa-regular fa-copyright"></i> 2023 Guru Digital IT. All Rights
                          Reserved.</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                      <div class="footer-bottom-nav">
                        <ul class="d-flex justify-content-end">
                          <li><a class="text-decoration-none" href="{{ route('instractor') }}">Instructor</a></li>
                          <li><a class="text-decoration-none" href="{{ route('become-instractor') }}">Become
                              Instructor</a></li>
                          <li><a class="text-decoration-none" href="{{ route('verify-certificate') }}">Verify Certificate</a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Part End -->

    <!--=======================================
    All Jquery Script link
===========================================-->
    <!-- Bootstrap core JavaScript -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"-->
    <!--    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"-->
    <!--    crossorigin="anonymous"></script>-->
    <script src="{{ asset('frontend') }}/css/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/jquery/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- ==== Plugin JavaScript ==== -->
    <script src="{{ asset('frontend') }}/css/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{ asset('frontend') }}/css/js/jquery-ui.min.js"></script>

    <!--WayPoints JS Script-->
    <script src="{{ asset('frontend') }}/css/js/waypoints.min.js"></script>

    <!--Counter Up JS Script-->
    <script src="{{ asset('frontend') }}/css/js/jquery.counterup.min.js"></script>

    <script src="{{ asset('frontend') }}/css/js/owl.carousel.min.js"></script>

    <!-- Range Slider -->
    <script src="{{ asset('frontend') }}/css/js/price_range_script.js"></script>

    <!--Feather Icon-->
    <script src="{{ asset('frontend') }}/css/js/feather.min.js"></script>

    <!--Iconify Icon-->
    <script src="{{ asset('frontend') }}/common/js/iconify.min.js"></script>

    <!--Venobox-->
    <script src="{{ asset('frontend') }}/css/js/venobox.min.js"></script>

    <!-- Menu js -->
    <script src="{{ asset('frontend') }}/css/js/menu.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('frontend') }}/css/js/frontend-custom.js"></script>

    <script src="admin/sweetalert2/sweetalert2.all.js"></script>
    <input type="hidden" id="base_url" value="">
    <!-- Start:: Navbar Search  -->
    <input type="hidden" class="search_route" value="">
    <script src="{{ asset('frontend') }}/css/js/custom/search-course.js"></script>
    <!-- End:: Navbar Search  -->
    <script>
        function getLanguage() {
            return {
                "sEmptyTable": "No data available in table",
                "sInfo": "Showing _START_ To _END_ Of _TOTAL_ Entries",
                "sInfoEmpty": "Showing 0 to 0 of 0 entries",
                "sInfoFiltered": "(filtered from _MAX_ total entries)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "Show _MENU_ entries",
                "sLoadingRecords": "Loading...",
                "sProcessing": "Processing...",
                "sSearch": "Search:",
                "sZeroRecords": "No matching records found",
                "oPaginate": {
                    "sFirst": "First",
                    "sLast": "Last",
                    "sNext": "Next",
                    "sPrevious": "Previous"
                },
                "oAria": {
                    "sSortAscending": ": activate to sort column ascending",
                    "sSortDescending": ": activate to sort column descending"
                }
            };
        }
    </script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/jszip/jszip.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('frontend') }}/css/vendor/datatable/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        var paginateRoute = "courses.html"
    </script>
    <script src="{{ asset('frontend') }}/css/js/course/filter.js"></script>
    <script src="{{ asset('frontend') }}/css/js/course/addToCart.js"></script>
    <script src="{{ asset('frontend') }}/css/js/course/addToWishlist.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script
        type="text/javascript">toastr.options = { "closeButton": true, "closeClass": "toast-close-button", "closeDuration": 300, "closeEasing": "swing", "closeHtml": "<button><i class=\"icon-off\"><\/i><\/button>", "closeMethod": "fadeOut", "closeOnHover": true, "containerId": "toast-container", "debug": false, "escapeHtml": false, "extendedTimeOut": 10000, "hideDuration": 1000, "hideEasing": "linear", "hideMethod": "fadeOut", "iconClass": "toast-info", "iconClasses": { "error": "toast-error", "info": "toast-info", "success": "toast-success", "warning": "toast-warning" }, "messageClass": "toast-message", "newestOnTop": false, "onHidden": null, "onShown": null, "positionClass": "toast-top-right", "preventDuplicates": true, "progressBar": true, "progressClass": "toast-progress", "rtl": false, "showDuration": 300, "showEasing": "swing", "showMethod": "fadeIn", "tapToDismiss": true, "target": "body", "timeOut": 5000, "titleClass": "toast-title", "toastClass": "toast" };</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"
 href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

</body>

</html>
