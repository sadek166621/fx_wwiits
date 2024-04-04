@extends('frontend.master2')
@section('content')
    <div class="bg-page">
        <!-- Page Header Start -->
        <header class="page-banner-header blank-page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="blank-page-banner-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="page-banner-content text-center">
                                    <h3 class="page-banner-heading color-heading pb-15">Hey, {{ $student->first_name }} {{ $student->last_name }} <img
                                            src="{{ asset('frontend') }}/css/img/icons-svg/waving-hand.webp"
                                            alt="student" class="me-2"></h3>
                                    <!-- Breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item font-14"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item font-14 active" aria-current="page">Profile</li>
                                        </ol>
                                    </nav>
                                    <!-- Breadcrumb End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Header End -->

        <!-- Student Profile Page Area Start -->
        <section class="student-profile-page">
            <div class="container">
                <div class="student-profile-page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="row bg-white">
                                <!-- Student Profile Left part -->
                                <div class="col-lg-3 p-0">
                                    <div class="student-profile-left-part">

                                        <h6>{{ $student->first_name }} {{ $student->last_name }}</h6>
                                        <p class="px-5 py-4">You're a Student </p>
                                        <ul class="list-unstyled">
                                            <li><a href="#"
                                                    class="font-medium font-15 text-decoration-none active">Profile</a></li>
                                            <li><a href="{{ route('reference') }}"
                                                    class="font-medium font-15 text-decoration-none ">Reference</a></li>
                                            <li><a href="{{ route('passbook') }}"
                                                    class="font-medium font-15 text-decoration-none ">My Passbook</a></li>
                                            <li><a href="{{ route('withdraw') }}"
                                                    class="font-medium font-15 text-decoration-none ">Withdrawals</a></li>
                                            <li><a href="{{ route('password-change') }}"
                                                    class="font-medium font-15 text-decoration-none ">Change Password</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Student Profile Right part -->
                                <div class="col-lg-9 p-0">
                                    <div class="student-profile-right-part">

                                        <h5>Profile</h5>

                                        {{-- <div class="my-4">
                                            <form action="#"
                                                method="post">
                                                <input type="hidden" name="_token"
                                                    value="1xATONWiuHKv8Qc2yJE0ree21F4rALE6TPtFjB2o">
                                                <p>Verify your e-mail and get reward!</p>

                                                <button type="submit"
                                                    class="theme-btn theme-button1 theme-button3 font-10 fw-bold fs-6"
                                                    style="font-size:0.8rem !important ">Send Verification Code</button>
                                            </form>
                                        </div> --}}
                                        <form action="{{ route('student-profile-update', $student->id) }}"method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="profile-top mb-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="profile-image radius-50">

                                                        <img class="avater-image" id="target1"
                                                            src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}"
                                                            alt="img">
                                                        <div class="custom-fileuplode">
                                                            <label for="fileuplode"
                                                                class="file-uplode-btn bg-hover text-white radius-50">
                                                                <span class="iconify"
                                                                    data-icon="bx:bx-edit"></span></label>
                                                            <input type="file" id="fileuplode" name="image"
                                                                accept="image/*" class="putImage1"
                                                                onchange="previewFile(this)">
                                                        </div>
                                                    </div>
                                                    <div class="author-info">
                                                        <p class="font-medium font-15 color-heading">Student ID: {{ $student->refer_code }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-6 mb-30">
                                                    <h5>Balance: {{ $student->bonus}}৳</h5>
                                                </div>
                                                <div class="col-md-6 mb-30">

                                                    <label class="font-medium font-15 color-heading">First Name</label>
                                                    <p>{{ $student->first_name }}</p>
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <label class="font-medium font-15 color-heading">Last Name</label>
                                                    <p>{{ $student->last_name }}</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">Email</label>
                                                    <p>{{ $student->email }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">Phone
                                                        Number</label>
                                                    <input  type="text" name="phone" value="{{ $student->phone }}"
                                                        class="form-control" placeholder="Type your phone number">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">Country</label>
                                                    <input  type="text" name="country" value="{{ $student->country }}"
                                                        class="form-control" placeholder="Type your country">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">State</label>
                                                    <input  type="text" name="state" value="{{ $student->state }}"
                                                        class="form-control" placeholder="Type your state">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">City</label>
                                                    <input  type="text" name="city" value="{{ $student->city }}"
                                                        class="form-control" placeholder="Type your city">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">Postal Code</label>
                                                    <input  type="text" name="postal_code" value="{{ $student->postal_code }}"
                                                        class="form-control" placeholder="Type your postal_code">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">Facebook</label>
                                                    <input  type="text" name="fb_link" value="{{ $student->fb_link }}"
                                                        class="form-control" placeholder="Type your fb_link">
                                                </div>
                                            </div>

                                            {{-- <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">Youtube</label>
                                                    <input required type="text" name="yt_link" value=""
                                                        class="form-control" placeholder="Type your yt_link">
                                                </div>
                                            </div> --}}

                                            <div class="row">
                                                <div class="col-md-12 mb-30">
                                                    <label class="font-medium font-15 color-heading">Bio</label>
                                                    <textarea class="form-control" name="about_me"
                                                        id="exampleFormControlTextarea1" rows="3"
                                                        placeholder="Type about yourself">{{ $student->about_me }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-30">
                                                <div class="col-md-12">
                                                    <label class="font-medium font-15 color-heading">Gender</label>

                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input required" type="radio"
                                                                name="gender" id="inlineRadio1" value="Male" @if ($student->gender == 'Male' ) checked @endif>
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input required" type="radio"
                                                                name="gender" id="inlineRadio2" value="Female"@if ($student->gender == 'Female' ) checked @endif>
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">Female</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="inlineRadio3" value="Others" @if ($student->gender == 'Others' ) checked @endif>
                                                            <label class="form-check-label"
                                                                for="inlineRadio3">Others</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-12 mt-5">
                                                <button type="submit"
                                                    class="theme-btn theme-button1 theme-button3 font-10 fw-bold fs-6"
                                                    style="font-size:0.8rem !important ">Save</button>
                                            </div>
                                        </form>
                                        <h6 class="mt-5">Your Referral Code</h6>
                                        <h4><strong>{{ $student->refer_code }}</strong></h4>
                                        <script>
                                            function myFunction() {
                                                // Get the text field
                                                var copyText = document.querySelector('.referral_link');

                                                // Select the text field
                                                copyText.type = "text";
                                                copyText.select();
                                                copyText.setSelectionRange(0, 99999); // For mobile devices

                                                // Copy the text inside the text field
                                                navigator.clipboard.writeText(copyText.value);

                                                // Alert the copied text
                                                alert("Copied the text: " + copyText.value);
                                                copyText.type = "hidden";
                                            }
                                        </script>
                                        <h4>
                                           <form action="{{ route('refer-code-sign-up', $student->refer_code) }}" method="get">
                                            @csrf
                                            <h3 class="theme-btn theme-button1 theme-button3 font-15 fw-bold mt-4"
                                            onclick="myFunction()">Copy Link</h3>
                                        <p>https://gurudigitalit.com/refer-code-sign-up/{{ $student->refer_code }}</p>
                                        <input type="hidden" class="referral_link"
                                            {{-- value="https://gurudigitalit.com/student-signup/{{ $student->refer_code }}"> --}}
                                            value="https://gurudigitalit.com/refer-code-sign-up/{{ $student->refer_code }}">
                                           </form>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Student Profile Page Area End -->
    </div>
    <!-- Main Content End-->

 @endsection
