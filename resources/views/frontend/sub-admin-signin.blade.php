<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subadmin LogIn</title>
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
                    <h3 class="text-color fw-medium">Log in to Subadmin</h3>
                </div>
                <div class="col-md-8 mt-3 mt-md-4">
                    <div class="col-md-12">
                        <label class="form-label text-color fw-medium">Account Type</label>
                        <select name="account_type" class="form-control">

                                                                                                                                                                                                                <option value="Photo Editing Teacher">Photo Editing Teacher</option>
                                                                                                                                        <option value="Team Leader">Team Leader</option>
                                                                                                                                        <option value="Video Editing Teacher">Video Editing Teacher</option>
                                                                                                                                        <option value="Counsellor">Counsellor</option>
                                                                                                                                        <option value="Senior Counsellor">Senior Counsellor</option>
                                                                                                                                        <option value="Help-Line">Help-Line</option>
                                                                                                                                        <option value="Social Marketing Teacher">Social Marketing Teacher</option>
                                                                                                                                        <option value="Web-Developer">Web-Developer</option>
                                                                                                                                        <option value="Selling Team">Selling Team</option>
                                                                                                                                        <option value="Marketing Team">Marketing Team</option>
                                                                                                                                        <option value="Qualification Team">Qualification Team</option>
                                                                                                                                        <option value="Controller">Controller</option>
                                                                                                                                        <option value="Teacher">Teacher</option>
                                                                                                                                        <option value="Senior Team Leder">Senior Team Leder</option>
                                                                                                                                        <option value="Senior Controller">Senior Controller</option>
                                                                                                                                        <option value="Senior  Manager">Senior  Manager</option>
                                                                                                                                        <option value="Counsellor Manager">Counsellor Manager</option>
                                                                                                                                        <option value="Marketing  Manager">Marketing  Manager</option>
                                                                                                                                        <option value="Senior Teacher">Senior Teacher</option>
                                                                                                                                        <option value="Accounter">Accounter</option>
                                                                                                                                        <option value="Admin">Admin</option>
                                                                                                                                    </select>
                                                    </div>
                </div>
                <form action="{{ route('sub-admin-login') }}" method="Post">
                    @csrf
                    <div class="col-md-8 mt-3 mt-md-4">
                        <label for="inputEmail" class="form-label text-color fw-medium">Subadmin Email or Phone</label>
                        <input type="email" name="email" class="form-control" id="inputEmail"
                            placeholder="Type Email or Phone Number">
                    </div>
                    <div class="col-md-8 mt-3 mt-md-4">
                        <label for="inputPassword" class="form-label text-color fw-medium">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="********">

                    </div>

                    <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-danger fw-bold w-100 my-2 p-2 bg-opacity-50">Sign
                                In</button>
                        </div>
                        <div class="col-md-8">
                            <button type="submit"
                                class="btn bg-danger bg-opacity-75 text-light fw-bold w-100 my-2 p-2 ">Sign in with
                                Google</button>
                        </div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary fw-bold w-100 my-2 p-2 bg-opacity-50">Sign in
                                with Facebook</button>
                        </div>
                        <div class="col-md-8">
                            <button type="submit"
                                class="btn bg-primary bg-opacity-75 text-light fw-bold w-100 my-2 p-2 bg-opacity-50">Sign
                                in with Twitter</button>
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
        <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"
 href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
</body>

</html>
