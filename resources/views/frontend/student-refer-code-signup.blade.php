{{--
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/{{ asset('frontend') }}/images/logo.png" type="image/x-icon">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/686e4da3bd.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/styles.css">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="row g-5">
            <div class="col-md-5">
                <div class=" nav-background ">
                    <div class="">
                        <a href="#"><img class="img-fluid p-5 w-50" src="{{ asset('frontend') }}/{{ asset('frontend') }}/images/logo1.png" alt="logo"></a>
                    </div>
                    <h3 class="text-light fw-medium p-4">There is an opportunity to earn <br> from the first day of
                        learning the course</h3>
                    <div class="">
                        <img src="{{ asset('frontend') }}/{{ asset('frontend') }}/images/log.png" alt="hero" class="img-fluid w-75 m-5 ">
                    </div>
                </div>
            </div>
            <div class="col-md-7 d-flex justify-content-center align-items-center">

                <div class="bg-white">
                    <br>
                                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                     @endforeach
                                    </ul>
                                </div>
                            @endif
                    <form method="POST" action="{{ route('student-registration-form') }}">
                        @csrf
                        <h5 class="text-color fw-medium mb-1">Create an Account</h5>
                        <p class="text-primary">Already have an account? <a class="text-danger" href="{{ route('student.signin') }}">Sign In</a></p>

                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <label class="label-text-title color-heading fw-medium text-color mb-3" for="email">Email
                                    <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" value="" class="form-control"
                                    placeholder="Type your email">
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-3">
                                <div class="input__group">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3">Country
                                        Code</label>
                                    <select class="form-control" name="country_code">
                                        <option value>Select Code</option>
                                        <option value="+88">BD(+88)</option>
                                        <option value="+91">India(+91)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="mobile_number">WhatsApp Number</label>
                                <input type="number" name="phone" id="mobile_number" value="" class="form-control"
                                    placeholder="Type your mobile number">
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-4">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="first_name">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" id="first_name" value="" class="form-control"
                                    placeholder="First Name">
                            </div>
                            <div class="col-md-4">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" id="last_name" value="" class="form-control"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="password">Password <span class="text-danger">*</span></label>

                                <div class="form-group mb-0 position-relative">
                                    <input type="password" name="password" id="password" value=""
                                        class="form-control password" placeholder="*********">
                                </div>


                            </div>

                        </div>

                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="Referral code">Referral code <span class="text-danger">*</span></label>

                                <div class="form-group mb-0 position-relative">
                                    <input type="number" name="refered_code" value="" class="form-control referral_code"
                                        placeholder="Refferel Code">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                        <label class="form-check-label text-color mb-0" for="flexCheckChecked">
                                            By clicking Create account, I agree that I have read and accepted the <a
                                                href=""
                                                class="color-hover text-danger text-decoration-underline">Terms of Use</a> and <a
                                                href=""
                                                class="color-hover text-danger text-decoration-underline">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <button type="submit"
                                    class="btn btn-danger font-15 fw-bold w-100">Sign Up</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
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

</html> --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
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
                    <h3 class="text-light fw-medium p-4">There is an opportunity to earn <br> from the first day of learning the course</h3>
                    <div class="">
                        <img src="{{ asset('frontend') }}/images/log.png" alt="hero" class="img-fluid w-75 m-5 ">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 p-5 p-md-0 d-flex justify-content-center align-items-center">
                <div class="bg-white">
                    <br>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form method="POST" action="{{ route('student-registration-form') }}">
                        @csrf
                        <h5 class="text-color fw-medium mb-1">Create an Account</h5>
                        <p class="text-primary">Already have an account? <a class="text-danger" href="{{ route('student.signin') }}">Sign In</a></p>

                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <label class="label-text-title color-heading fw-medium text-color mb-3" for="email">Email
                                    <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" value="" class="form-control"
                                    placeholder="Type your email" >
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <label class="label-text-title color-heading fw-medium text-color mb-3" for="email">Phone
                                    <span class="text-danger">*</span></label>
                                <input type="number" name="phone"  value="" class="form-control"
                                    placeholder="Type your Phone Number" required>
                                    <input type="hidden" value="{{ $referal_bonus->amount }}" name="bonus_amount">

                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-3">
                                <div class="input__group">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3">Country
                                        Code</label>
                                    <select class="form-control" name="country_code">
                                        <option value>Select Code</option>
                                        <option value="+88">BD(+88)</option>
                                        <option value="+91">India(+91)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="mobile_number">WhatsApp Number</label>
                                <input type="number" name="whatsapp_number" id="mobile_number" value="" class="form-control"
                                    placeholder="Type your Whatsapp number">
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-4">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="first_name">First Name <span class="text-danger">*</span></label>
                                <input type="text" name="first_name" id="first_name" value="" class="form-control"
                                    placeholder="First Name">
                            </div>
                            <div class="col-md-4">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="last_name" id="last_name" value="" class="form-control"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="password">Password <span class="text-danger">*</span></label>

                                <div class="form-group mb-0 position-relative">
                                    <input type="password" name="password" id="password" value=""
                                        class="form-control password" placeholder="*********">
                                </div>


                            </div>

                        </div>

                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <label class="label-text-title color-heading fw-medium text-color mb-3"
                                    for="Referral code">Referral code <span class="text-danger"></span></label>

                                <div class="form-group mb-0 position-relative">
                                    <input type="number" name="refered_code" value="{{ $refercode->refer_code }}" class="form-control referral_code"
                                        placeholder="Refferel Code" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                        <label class="form-check-label text-color mb-0" for="flexCheckChecked">
                                            By clicking Create account, I agree that I have read and accepted the <a
                                                href=""
                                                class="color-hover text-danger text-decoration-underline">Terms of Use</a> and <a
                                                href=""
                                                class="color-hover text-danger text-decoration-underline">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                            <div class="col-md-8">
                                <button type="submit"
                                    class="btn btn-danger font-15 fw-bold w-100">Sign Up</button>
                            </div>
                        </div>

                    </form>
                </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
