@extends('frontend.master')
@section('content')
<div class="bg-page mb-5">
    <!-- Page Header Start -->
    <header class="page-banner-header gradient-bg position-relative">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="page-banner-content text-center">
                            <h3 class="page-banner-heading text-white pb-15">Become an Instructor</h3>

                            <!-- Breadcrumb Start-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item font-14"><a class="text-decoration-none" href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item font-14 active" aria-current="page">Become an
                                        Instructor</li>
                                </ol>
                            </nav>
                            <!-- Breadcrumb End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Header End -->

    <!-- Course Instructor and Support Area Start -->
    {{-- <section class="become-instructor-feature-area section-t-space">
        <div class="container">
            <div class="row become-instructor-feature-wrap">


            </div>
            <div class="row">
                <div
                    class="d-flex justify-content-sm-center become-instructor-call-to-action align-items-center mt-50">
                    <button class="theme-btn theme-button1 theme-button3 mr-30" data-bs-toggle="modal"
                        data-bs-target="#becomeAnInstructor"> Become an Instructor <i
                            data-feather="arrow-right"></i></button>
                    <a href="#"
                        class="text-decoration-underline font-15 font-medium"> Contact With Us</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Course Instructor and Support Area End -->

    <!-- Become an instructor Procedures Area Start -->
    <section class="become-an-instructor-procedures-area">
        <div class="container">


        </div>
    </section>
    <!-- Become an instructor Procedures Area End -->

    <!-- Counter Area Start -->
    {{-- <section class="counter-area bg-light section-t-space">
        <div class="container">
            <div class="row">

                <!-- Counter Item start-->
                <div class="col-md-6 col-lg-3">
                    <div class="counter-item d-flex align-items-center">
                        <div class="flex-shrink-0 counter-img-wrap">
                            <img src="{{ asset('frontend') }}/css/img/icons-svg/counter-1.webp"
                                alt="img">
                        </div>
                        <div class="flex-grow-1 ms-3 counter-content">
                            <h4 class="count-content"><span class="counter">58340</span>+</h4>
                            <p class="font-14 font-medium color-gray mt-2">Students</p>
                        </div>
                    </div>
                </div>
                <!-- Counter Item End-->

                <!-- Counter Item start-->
                <div class="col-md-6 col-lg-3">
                    <div class="counter-item d-flex align-items-center">
                        <div class="flex-shrink-0 counter-img-wrap">
                            <img src="{{ asset('frontend') }}/css/img/icons-svg/counter-2.webp"
                                alt="img">
                        </div>
                        <div class="flex-grow-1 ms-3 counter-content">
                            <h4 class="count-content"><span class="counter">2998</span></h4>
                            <p class="font-14 font-medium color-gray mt-2">Enrollments</p>
                        </div>
                    </div>
                </div>
                <!-- Counter Item End-->

                <!-- Counter Item start-->
                <div class="col-md-6 col-lg-3">
                    <div class="counter-item d-flex align-items-center">
                        <div class="flex-shrink-0 counter-img-wrap">
                            <img src="{{ asset('frontend') }}/css/img/icons-svg/counter-3.webp"
                                alt="img">
                        </div>
                        <div class="flex-grow-1 ms-3 counter-content">
                            <h4 class="count-content"><span class="counter">62</span>+</h4>
                            <p class="font-14 font-medium color-gray mt-2">Instructor</p>
                        </div>
                    </div>
                </div>
                <!-- Counter Item End-->

                <!-- Counter Item start-->
                <div class="col-md-6 col-lg-3">
                    <div class="counter-item d-flex align-items-center">
                        <div class="flex-shrink-0 counter-img-wrap">
                            <img src="{{ asset('frontend') }}/css/img/icons-svg/counter-4.webp"
                                alt="img">
                        </div>
                        <div class="flex-grow-1 ms-3 counter-content">
                            <h4 class="count-content"><span class="counter">100</span>%</h4>
                            <p class="font-14 font-medium color-gray mt-2">Satisfaction</p>
                        </div>
                    </div>
                </div>
                <!-- Counter Item End-->

            </div>
        </div>
    </section> --}}
    <!-- Counter Area End -->

    <!-- Become instructor Call to action Area Start -->
    <section class="become-instructor-call-to-action section-t-space text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-heading">Join One Of The World’s Largest Learning Marketplaces.</h3>
                    <div class="col-lg-6 mx-auto">
                        <p class="font-20 mb-4">Donald valley teems with vapour around me, and the meridian sun
                            strikes the upper surface of the impenetrable foliage of my tree</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="theme-btn theme-button1 theme-button3 mr-30" data-bs-toggle="modal"
                                data-bs-target="#becomeAnInstructor"> Become an Instructor <i
                                    data-feather="arrow-right"></i></button>
                            <a href="#" target="_blank"
                                class="text-decoration-underline font-15 font-medium">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Become an Instructor Modal Start -->
<div class="modal fade becomeAnInstructorModal" id="becomeAnInstructor" tabindex="-1"
    aria-labelledby="becomeAnInstructorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="becomeAnInstructorLabel">Submit your application</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('binstructor') }}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <label class="label-text-title color-heading font-medium font-16 mb-2">First
                                Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name"
                                placeholder="Write your first name" value="Sumon" required>
                        </div>
                    </div>

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <label class="label-text-title color-heading font-medium font-16 mb-2">Account
                                Type</label>
                            <select class="form-control" name="account_type">
                                <option value="1">Instructor</option>
                                <option value="2">Organization</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <label class="label-text-title color-heading font-medium font-16 mb-2">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name"
                                placeholder="Write your last name" value="Barmon" required>
                        </div>
                    </div>

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <label for="professional_title"
                                class="label-text-title color-heading font-medium font-16 mb-2">Professional
                                Title</label>
                            <input type="text" name="professional_title" class="form-control"
                                id="professional_title" placeholder="Professional Title" value="">
                        </div>
                    </div>

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <label class="label-text-title color-heading font-medium font-16 mb-2">Phone
                                Number</label>
                            <input type="text" name="phone_number" class="form-control" id="phone_number"
                                placeholder="Phone Number" value="" required>
                        </div>
                    </div>

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <label class="label-text-title color-heading font-medium font-16 mb-2">Address</label>
                            <input type="text" name="address" class="form-control" id="address"
                                placeholder="Address" value="" required>
                        </div>
                    </div>

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <label class="label-text-title color-heading font-medium font-16 mb-2">Bio</label>
                            <textarea name="about_me" class="form-control" cols="30" rows="10"
                                placeholder="About your self" required></textarea>
                        </div>
                    </div>

                </div>

                <div class="form-check">
                    <input type="checkbox" name="status" class="" id="exampleCheck1" @isset($becomein) @if($becomein->status == 1) checked @endif @else checked @endisset >
                    <label class="form-check-label" for="exampleCheck1">Active</label>
                  </div>

                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="submit" class="theme-btn theme-button1 default-hover-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Become an Instructor Modal End -->

<!-- Main Content End-->
@endsection
