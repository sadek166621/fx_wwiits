<!-- - var bodyCustom = 'bg-blue bg-lighten-2' // Use any color palette class--><!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Crypto ICO admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, crypto ico admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>{{ get_page_meta() }} {{ config('app.name') }}</title>
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/images/web/healthx-fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/images/web/healthx-fav.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/pages/account-login.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-compact-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-compact-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section id="account-login" class="flexbox-container">    
    <div class="col-12 d-flex align-items-center justify-content-center">
        <!-- image -->
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 col-12 p-0 text-center d-none d-md-block">
            <div class="border-grey border-lighten-3 m-0 box-shadow-0 card-account-left height-400">
                <img src="{{ asset('assets') }}/images/pages/account-login.png" class="card-account-img width-200" alt="card-account-img">
            </div>
        </div>
        <!-- login form -->
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 col-12 p-0">
            <div class="card border-grey border-lighten-3 m-0 box-shadow-0 card-account-right height-400">                
                <div class="card-content">                    
                    <div class="card-body p-3">
                        <p class="text-center h5 text-capitalize">Welcome to Health X!</p>
                        <p class="mb-3 text-center">Please enter your login details</p>
                        <form method="POST" action="{{ route('app.loginAction') }}" class="form-horizontal form-signin">   
                            @csrf                         
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="user-name" name="email" placeholder="Your Username" value="{{ old('email') }}" required autofocus="">
                                <label for="user-name">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-label-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="user-password" placeholder="Enter Password"  name="password"  required autocomplete="current-password">
                                <label for="user-password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">
                                    <fieldset>
                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                        <label for="remember-me"> Remember</label>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="#" class="card-link">Forgot Password?</a></div>
                            </div>
                            <button type="submit" class="btn-gradient-primary btn-block my-1">Log In</button>
                            <p class="text-center"><a href="{{ route('register') }}" class="card-link">Register</a></p>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>        
    </div>    
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>