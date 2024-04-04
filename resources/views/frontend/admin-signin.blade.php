<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin LogIn</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/logo.png" type="image/x-icon">
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
</head>

<body>
    <section>
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="nav-background ">
                    <div class="">
                        <a href="{{ route('home') }}"><img class="img-fluid p-5 " src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" alt="logo" style="width: 60%!important"></a>
                    </div>
                    <h3 class="text-light fw-medium p-4">There is an opportunity to earn <br> from the first day of
                        learning the course</h3>
                    <div class="">
                        <img src="{{ asset('frontend') }}/images/log.png" alt="hero" class="img-fluid w-75 m-5 ">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 p-5 p-md-0 p-lg-5">
                <div class="col-md-8 mt-3 mt-md-4 pt-3 pt-md-4">
                    <h3 class="text-color fw-medium">Log in to Admin Panel</h3>
                </div>
                <form action="{{ route('admin.loginAction') }}" method="POST">
                    @csrf
                    <div class="col-md-8 mt-3 mt-md-4">
                        <label for="inputEmail" class="form-label text-color fw-medium">Admin Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                            placeholder="Type Your Email"  placeholder="Email">
                    </div>
                    <div class="col-md-8 mt-3 mt-md-4">
                        <label for="inputPassword" class="form-label text-color fw-medium">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"  placeholder="********">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>

                    <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-danger fw-bold w-100 my-2 p-2 bg-opacity-50">Sign
                                In</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
