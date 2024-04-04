
@extends('frontend.master2')
@section('content')
    <div class="bg-page">
        <!-- Course Single Page Header Start -->
        <header class="page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="page-banner-content text-center">
                                <h3 class="page-banner-heading text-white pb-15">Enroll Courses</h3>
                                <!-- Breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item font-14"><a href="" class="text-decoration-none">Home</a></li>
                                        <li class="breadcrumb-item font-14 active" aria-current="page">Enroll Courses</li>
                                    </ol>
                                </nav>
                                <!-- Breadcrumb End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Course Single Page Header End -->

                <!-- Courses Page Area Start -->
                <section class="courses-page-area section-t-space">
                    <div class="container">

                        <div class="row shop-content">
                            <!-- Show all course area start-->
                            <div class="col-md-12 col-lg-12  show-all-course-area-wrap">
                                <div class="show-all-course-area">
                                    <!-- all courses grid Start-->
                                    <div id="loading" class="no-course-found text-center d-none">
                                        <div id="inner-status"><img src="frontend/assets/img/loader.svg" alt="img" /></div>
                                    </div>
                                    <div id="appendCourse">
                                        <div class="row courses-grids" id="appendCourseList">
                                            <!-- Course item start -->
                                            <div class="col-12 col-md-6 col-lg-4 ">
                                                <div class="card course-item border-0 radius-3 bg-white">
                                                    <div class="course-img-wrap overflow-hidden">
                                                        <a href="course-details/photo-editing.html"><img
                                                                src="{{ asset('frontend') }}/uploads/course/1694581805-LRWXrj12fL.jpg" alt="course"
                                                                class="img-fluid"></a>
                                                        <div class="course-item-hover-btns position-absolute">
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title course-title"><a
                                                                href="{{ route('student.dashboard') }}">Photo
                                                                editing part 1</a></h5>
                                                        <p class="card-text instructor-name-certificate font-medium font-12">
                                                            <a href="users/74/profile.html">Saruwar Karim</a>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Course item end -->
                                            <!-- Course item start -->

                                            <!-- Course item end -->

                                        </div>
                                    </div>
                                    <!-- all courses grid End-->
                                </div>
                            </div>
                            <!-- Show all course area End-->
                        </div>
                    </div>
                </section>
                <!-- Courses Page Area End -->
    </div>

    <!-- Main Content End-->


    <!-- Footer Part Start -->
    @endsection
