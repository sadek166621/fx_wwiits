@extends('frontend.master2')
@section('content')

    <!-- Main Content Start-->
    <div class="bg-page">
        <!-- Page Header Start -->
        <header class="page-banner-header blank-page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="blank-page-banner-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="page-banner-content text-center">
                                    <h3 class="page-banner-heading color-heading pb-15">Hey, {{ $student->first_name }} {{ $student->last_name }}<img
                                            src="{{ asset('frontend') }}/css/img/icons-svg/waving-hand.webp"
                                            alt="student" class="me-2"></h3>

                                    <!-- Breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item font-14"><a
                                                  class="text-decoration-none"  href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item font-14 active" aria-current="page">Change
                                                Password</li>
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
                                    @include('frontend.include.menu')
                                </div>
                                <!-- Student Profile Right part -->
                                <div class="col-lg-9 p-0">
                                    <div class="student-profile-right-part">
                                        <h6>Update Password</h6>
                                        <form action="{{ route('password.change.submit') }}" method="POST">
                                            @csrf
                                            <!--<input type="hidden" name="_token"-->
                                            <!--    value="#">-->
                                            <div class="row">
                                                <div class="col-md-6 mb-30">
                                                    <label class="font-medium font-15 color-heading">Old
                                                        Password</label>
                                                    <input type="password" name="old_password" value=""
                                                        class="form-control" placeholder="Old Password">
                                                </div>
                                                <div class="col-md-6 mb-30">
                                                    <label class="font-medium font-15 color-heading">New
                                                        Password</label>
                                                    <input type="password" name="new_password" minlength="6"
                                                        maxlength="12" value="" class="form-control"
                                                        placeholder="New Password">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="theme-btn theme-button1 theme-button3 font-15 fw-bold">Update</button>
                                            </div>
                                        </form>

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
