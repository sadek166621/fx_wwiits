@extends('frontend.master')
@section('content')
<header class="page-banner-header gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="page-banner-content text-center">
                        <h3 class="page-banner-heading text-white pb-15">About Us</h3>

                        <!-- Breadcrumb Start-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item font-14"><a class="text-decoration-none" href="index.html">Home</a></li>
                                <li class="breadcrumb-item font-14 active" aria-current="page">About Us</li>
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

<!-- Gallery Area Start -->
<section class="our-gallery-area section-t-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="section-heading">Mere Tranquil Existence, That I Neglect My Talents Should</h3>
                    <p class="section-sub-heading">Possession Of My Entire Soul, Like These Sweet Mornings Of Spring
                        Which I Enjoy With My Whole Heart. I Am Alone, And Charm Of Existence In This Spot, Which
                        Was Created For The Bliss Of Souls Like Mine. I Am So Happy, My Dear Friend, So Absorbed In
                        The Exquisite Sense Of Mere Tranquil Existence</p>
                </div>
            </div>
        </div>

        <div class="gallery-img-wrapper">
            <!--Our Gallery image Start-->
            <div class="row shuffle-wrapper">
                <div class="col-lg-6 col-6 mb-25 shuffle-item wow fadeIn" data-groups="[&quot;all&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="{{ asset('frontend') }}/uploads_demo/gallery/1.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                    </div>
                </div>
                <div class="col-lg-6 col-6 mb-25 shuffle-item wow fadeIn" data-groups="[&quot;all&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="{{ asset('frontend') }}/uploads_demo/gallery/2.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                    </div>
                </div>
                <div class="col-lg-6 col-6 mb-25 shuffle-item wow fadeIn" data-groups="[&quot;all&quot;]"
                    data-wow-duration="0.5s" data-wow-delay=".25s">
                    <div class="position-relative hover-wrapper">
                        <img src="{{ asset('frontend') }}/uploads_demo/gallery/3.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                    </div>
                </div>
            </div>
            <!--Our Gallery image End-->
        </div>

    </div>
</section>
<!-- Gallery Area End -->

<!-- Our History Area Start -->
<section class="our-history-area bg-page section-t-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="section-heading">Our History</h3>
                    <p class="section-sub-heading">Possession Of My Entire Soul, Like These Sweet Mornings Of Spring
                        Which I Enjoy With My Whole Heart. I Am Alone, And Charm Of Existence In This Spot Which</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-timeline">
                <ul>
                    <li>
                        <h6 class="history-year">1998</h6>
                        <div class="history-content">
                            <h6 class="h6 fw-bold font-18">Mere tranquil existence</h6>
                            <p class="font-15 pt-1">Possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart...</p>
                        </div>
                    </li>
                    <li>
                        <h6 class="history-year">1998</h6>
                        <div class="history-content">
                            <h6 class="h6 fw-bold font-18">Incapable of drawing</h6>
                            <p class="font-15 pt-1">Exquisite sense of mere tranquil existence that I neglect my
                                talents add should be incapable of draw...</p>
                        </div>
                    </li>
                    <li>
                        <h6 class="history-year">1998</h6>
                        <div class="history-content">
                            <h6 class="h6 fw-bold font-18">Foliage access trees</h6>
                            <p class="font-15 pt-1">Serenity has taken possession of my entire soul, like these
                                sweet mornings of spring which I enjoy w...</p>
                        </div>
                    </li>
                    <li>
                        <h6 class="history-year">1998</h6>
                        <div class="history-content">
                            <h6 class="h6 fw-bold font-18">Among grass trickling</h6>
                            <p class="font-15 pt-1">Should be incapable of drawing a single stroke at the present
                                moment; and yet I feel that I never</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Our History Area End -->

<!-- Upgrade Your Skills Area Start -->
<section class="upgrade-your-skills-area section-t-space">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-md-6 col-xl-6">
                <div class="upgrade-skills-left position-relative">
                    <img src="{{ asset('frontend') }}/uploads_demo/about_us_general/upgrade.jpg" alt="about" class="img-fluid">
                </div>
            </div>
            <div class="col-md-5 col-xl-6">
                <div class="upgrade-skills-right">
                    <div class="section-title">
                        <h3 class="section-heading">Upgrade Your Skills Today For Upgrading Your Life.</h3>
                    </div>
                    <p>Noticed by me when I hear the buzz of the little world among the stalks, and grow familiar
                        with the countless indescribable forms of the insects and flies, then I feel the presence
                        stalks, and grow familiar with the countless </p>

                    <!-- section button start-->
                    <div class="col-12 section-btn">
                        <a href="courses.html" class="theme-btn default-hover-btn theme-button1">Find Your Course <i
                                data-feather="arrow-right"></i></a>
                    </div>
                    <!-- section button end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Upgrade Your Skills Area End -->

<!-- Our Passionate Team Member Area Start -->
<section class="passionate-team-member-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section-left-align-->
                <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
                    <div class="section-title section-title-left d-flex align-items-start">
                        <div class="section-heading-img"><img
                                src="{{ asset('frontend') }}/uploads_demo/about_us_general/team-members-heading-img.png" alt="Our team">
                        </div>
                        <div>
                            <h3 class="section-heading">Our Passionate Team Members</h3>
                            <p class="section-sub-heading">CHOOSE FROM 70+ ONLINE VIDEO COURSES WITH NEW ADDITIONS
                            </p>
                        </div>
                    </div>
                </div>
                <!-- section-left-align-->
            </div>
        </div>
        <div class="row">
            <!-- Team Member Item start-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card instructor-item border-0">
                    <div class="instructor-img-wrap overflow-hidden"><img src="{{ asset('frontend') }}/uploads_demo/team_member/1.jpg"
                            alt="team"></div>
                    <div class="card-body">
                        <h5 class="card-title">Arnold keens</h5>
                        <p class="card-text instructor-designation font-medium">CREATIVE DIRECTOR</p>
                    </div>
                </div>
            </div>
            <!-- Team Member Item End-->
            <!-- Team Member Item start-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card instructor-item border-0">
                    <div class="instructor-img-wrap overflow-hidden"><img src="{{ asset('frontend') }}/uploads_demo/team_member/2.jpg"
                            alt="team"></div>
                    <div class="card-body">
                        <h5 class="card-title">James Bond</h5>
                        <p class="card-text instructor-designation font-medium">Designer</p>
                    </div>
                </div>
            </div>
            <!-- Team Member Item End-->
            <!-- Team Member Item start-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card instructor-item border-0">
                    <div class="instructor-img-wrap overflow-hidden"><img src="{{ asset('frontend') }}/uploads_demo/team_member/4.jpg"
                            alt="team"></div>
                    <div class="card-body">
                        <h5 class="card-title">Scarlett Johansson</h5>
                        <p class="card-text instructor-designation font-medium">CREATIVE DIRECTOR</p>
                    </div>
                </div>
            </div>
            <!-- Team Member Item End-->
        </div>
    </div>
</section>
<!-- Our Passionate Team Member Area End -->

<!-- Course Instructor and Support Area Start -->
<section class="course-instructor-support-area bg-light section-t-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="section-heading">Quality Course, Instructor And Support</h3>
                    <p class="section-sub-heading">CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS</p>
                </div>
            </div>
        </div>
        <div class="row course-instructor-support-wrap">

        </div>

        <!-- Client Logo Area start-->
        <div class="row client-logo-area">
            <div class="col">
                <div class="client-logo-item text-center">
                    <img src="{{ asset('frontend') }}/uploads_demo/client-logo/1.png" alt="Ovita">
                </div>
            </div>
            <div class="col">
                <div class="client-logo-item text-center">
                    <img src="{{ asset('frontend') }}/uploads_demo/client-logo/2.png" alt="Vigon">
                </div>
            </div>
            <div class="col">
                <div class="client-logo-item text-center">
                    <img src="{{ asset('frontend') }}/uploads_demo/client-logo/3.png" alt="Betribe">
                </div>
            </div>
            <div class="col">
                <div class="client-logo-item text-center">
                    <img src="{{ asset('frontend') }}/uploads_demo/client-logo/4.png" alt="Parsit">
                </div>
            </div>
            <div class="col">
                <div class="client-logo-item text-center">
                    <img src="{{ asset('frontend') }}/uploads_demo/client-logo/5.png" alt="Karika">
                </div>
            </div>
        </div>
        <!-- Client Logo Area end-->

    </div>
</section>
<!-- Course Instructor and Support Area End -->

<!-- Main Content End-->
@endsection
