@extends('frontend.master')
@section('content')
<div class="bg-page">
    <!-- Course Single Page Header Start -->
    <header class="page-banner-header gradient-bg position-relative">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="page-banner-content text-center">
                            <h3 class="page-banner-heading text-white pb-15">Courses</h3>
                            <!-- Breadcrumb Start-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item font-14"><a href="index.html" class="text-decoration-none">Home</a></li>
                                    <li class="breadcrumb-item font-14 active" aria-current="page">Courses</li>
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
            <div class="row">
                <div class="col-12">
                    <!-- Courses Filter Bar Start-->
                    <div class="courses-filter-bar">
                        <div class="row">
                            <div class="filter-bar-left col-lg-8">
                                <div class="filter-bar-left-top color-heading mb-3">
                                    People Also Search:
                                    <ul class="d-inline-flex align-items-center flex-wrap">
                                        <li class="search-tag-list color-hover font-13 font-medium"><a
                                                href="category/courses/Graphic-Design.html">Graphic Design</a></li>
                                        <li class="search-tag-list color-hover font-13 font-medium"><a
                                                href="category/courses/Video-Editing.html">Video Editing</a></li>
                                        <li class="search-tag-list color-hover font-13 font-medium"><a
                                                href="category/courses/Data-Entry.html">Data Entry</a></li>
                                        <li class="search-tag-list color-hover font-13 font-medium"><a
                                                href="category/courses/Islamic-Music-Education.html">Islamic Music
                                                Education</a></li>
                                    </ul>
                                </div>
                                <div class="d-inline-flex align-items-center">
                                    <div id="filter"
                                        class="actions-filter cursor sidebar-filter-btn color-gray d-flex align-items-center me-2">
                                        <img src="{{ asset('frontend') }}/css/img/courses-img/filter-icon.png" alt="short"
                                            class="me-2">
                                        Filter
                                    </div>
                                </div>
                            </div>

                            <div class="filter-bar-right col-lg-4 text-end">
                                <div class="filter-bar-left-top color-gray mb-3 d-none">
                                    <span class="color-heading">Search result for:</span> 18 Result Found
                                </div>
                                <div class="filter-box align-items-center justify-content-end">
                                    <div class="filter-box-short-icon color-gray font-15">
                                        <p class="mt-3">Sort By:</p>
                                    </div>
                                    <select class="form-select form-select-sm filterSortBy">
                                        <option value="1" selected>Default</option>
                                        <option value="2">Newest Course</option>
                                        <option value="3">Oldest Course</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Courses Filter Bar End-->
                </div>
            </div>
            <div class="row shop-content">
                <!-- Courses Sidebar start-->
                <div class="col-md-4 col-lg-3 col-xl-3 coursesLeftSidebar">
                    <div class="courses-sidebar-area bg-light">

                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item course-sidebar-accordion-item">
                                <h2 class="accordion-header course-sidebar-title" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Categories
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="accordion inner-accordion" id="accordionExample2">
                                            <div class="accordion-item sidebar-inner-accordion-item">
                                                <h2 class="accordion-header sidebar-inner-title" id="innerheading0">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#innercollapse0"
                                                        aria-expanded="false" aria-controls="innercollapse0">
                                                        Social Marketing
                                                    </button>
                                                </h2>
                                                <div id="innercollapse0" class="accordion-collapse collapse"
                                                    aria-labelledby="innerheading0"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body inner-accordion-body">

                                                        <div class="sidebar-radio-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input filterSubCategory"
                                                                    type="checkbox" name="filterSubCategory"
                                                                    id="exampleRadiosSubCategory60" value="7">
                                                                <label class="form-check-label"
                                                                    for="exampleRadiosSubCategory60">
                                                                    Network &amp; Security
                                                                </label>
                                                            </div>
                                                            <div class="radio-right-text"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item sidebar-inner-accordion-item">
                                                <h2 class="accordion-header sidebar-inner-title" id="innerheading1">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#innercollapse1"
                                                        aria-expanded="false" aria-controls="innercollapse1">
                                                        Video Editing
                                                    </button>
                                                </h2>
                                                <div id="innercollapse1" class="accordion-collapse collapse"
                                                    aria-labelledby="innerheading1"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body inner-accordion-body">

                                                        <div class="sidebar-radio-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input filterSubCategory"
                                                                    type="checkbox" name="filterSubCategory"
                                                                    id="exampleRadiosSubCategory90" value="24">
                                                                <label class="form-check-label"
                                                                    for="exampleRadiosSubCategory90">
                                                                    filmora
                                                                </label>
                                                            </div>
                                                            <div class="radio-right-text"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item sidebar-inner-accordion-item">
                                                <h2 class="accordion-header sidebar-inner-title" id="innerheading2">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#innercollapse2"
                                                        aria-expanded="false" aria-controls="innercollapse2">
                                                        Photo Editing
                                                    </button>
                                                </h2>
                                                <div id="innercollapse2" class="accordion-collapse collapse"
                                                    aria-labelledby="innerheading2"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body inner-accordion-body">

                                                        <div class="sidebar-radio-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input filterSubCategory"
                                                                    type="checkbox" name="filterSubCategory"
                                                                    id="exampleRadiosSubCategory100" value="25">
                                                                <label class="form-check-label"
                                                                    for="exampleRadiosSubCategory100">
                                                                    adobe photoshop
                                                                </label>
                                                            </div>
                                                            <div class="radio-right-text"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item sidebar-inner-accordion-item">
                                                <h2 class="accordion-header sidebar-inner-title" id="innerheading3">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#innercollapse3"
                                                        aria-expanded="false" aria-controls="innercollapse3">
                                                        Data Entry
                                                    </button>
                                                </h2>
                                                <div id="innercollapse3" class="accordion-collapse collapse"
                                                    aria-labelledby="innerheading3"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body inner-accordion-body">

                                                        <div class="sidebar-radio-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input filterSubCategory"
                                                                    type="checkbox" name="filterSubCategory"
                                                                    id="exampleRadiosSubCategory110" value="2">
                                                                <label class="form-check-label"
                                                                    for="exampleRadiosSubCategory110">
                                                                    Data Science
                                                                </label>
                                                            </div>
                                                            <div class="radio-right-text"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item sidebar-inner-accordion-item">
                                                <h2 class="accordion-header sidebar-inner-title" id="innerheading4">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#innercollapse4"
                                                        aria-expanded="false" aria-controls="innercollapse4">
                                                        Graphic Design
                                                    </button>
                                                </h2>
                                                <div id="innercollapse4" class="accordion-collapse collapse"
                                                    aria-labelledby="innerheading4"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body inner-accordion-body">

                                                        <div class="sidebar-radio-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input filterSubCategory"
                                                                    type="checkbox" name="filterSubCategory"
                                                                    id="exampleRadiosSubCategory120" value="19">
                                                                <label class="form-check-label"
                                                                    for="exampleRadiosSubCategory120">
                                                                    Graphic Design
                                                                </label>
                                                            </div>
                                                            <div class="radio-right-text"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item sidebar-inner-accordion-item">
                                                <h2 class="accordion-header sidebar-inner-title" id="innerheading5">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#innercollapse5"
                                                        aria-expanded="false" aria-controls="innercollapse5">
                                                        Learn Al Quran
                                                    </button>
                                                </h2>
                                                <div id="innercollapse5" class="accordion-collapse collapse"
                                                    aria-labelledby="innerheading5"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body inner-accordion-body">

                                                        <div class="sidebar-radio-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input filterSubCategory"
                                                                    type="checkbox" name="filterSubCategory"
                                                                    id="exampleRadiosSubCategory130" value="26">
                                                                <label class="form-check-label"
                                                                    for="exampleRadiosSubCategory130">
                                                                    Islamic
                                                                </label>
                                                            </div>
                                                            <div class="radio-right-text"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item sidebar-inner-accordion-item">
                                                <h2 class="accordion-header sidebar-inner-title" id="innerheading6">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#innercollapse6"
                                                        aria-expanded="false" aria-controls="innercollapse6">
                                                        Islamic Music Education
                                                    </button>
                                                </h2>
                                                <div id="innercollapse6" class="accordion-collapse collapse"
                                                    aria-labelledby="innerheading6"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body inner-accordion-body">

                                                        <div class="sidebar-radio-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input filterSubCategory"
                                                                    type="checkbox" name="filterSubCategory"
                                                                    id="exampleRadiosSubCategory140" value="27">
                                                                <label class="form-check-label"
                                                                    for="exampleRadiosSubCategory140">
                                                                    Islamic Music
                                                                </label>
                                                            </div>
                                                            <div class="radio-right-text"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item course-sidebar-accordion-item">
                                <h2 class="accordion-header course-sidebar-title" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Course Level
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterDifficultyLevel"
                                                    type="checkbox" name="filterDifficultyLevel"
                                                    id="exampleRadiosDifficulty0" value="1">
                                                <label class="form-check-label" for="exampleRadiosDifficulty0">
                                                    Higher
                                                </label>
                                            </div>
                                            <div class="radio-right-text"></div>
                                        </div>
                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterDifficultyLevel"
                                                    type="checkbox" name="filterDifficultyLevel"
                                                    id="exampleRadiosDifficulty1" value="2">
                                                <label class="form-check-label" for="exampleRadiosDifficulty1">
                                                    Medium
                                                </label>
                                            </div>
                                            <div class="radio-right-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item course-sidebar-accordion-item">
                                <h2 class="accordion-header course-sidebar-title" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Rating
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterRating" type="checkbox"
                                                    name="filterRating" id="exampleRadios41" value="5">
                                                <label class="form-check-label" for="exampleRadios41">
                                                    <span class="iconify" data-icon="bi:star-fill"></span>5 star
                                                </label>
                                            </div>
                                            <div class="radio-right-text"></div>
                                        </div>

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterRating" type="checkbox"
                                                    name="filterRating" id="exampleRadios42" value="4">
                                                <label class="form-check-label" for="exampleRadios42">
                                                    <span class="iconify" data-icon="bi:star-fill"></span>4 star or
                                                    above
                                                </label>
                                            </div>
                                            <div class="radio-right-text"></div>
                                        </div>

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterRating" type="checkbox"
                                                    name="filterRating" id="exampleRadios43" value="3">
                                                <label class="form-check-label" for="exampleRadios43">
                                                    <span class="iconify" data-icon="bi:star-fill"></span>3 star or
                                                    above
                                                </label>
                                            </div>
                                            <div class="radio-right-text"></div>
                                        </div>

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterRating" type="checkbox"
                                                    name="filterRating" id="exampleRadios44" value="2">
                                                <label class="form-check-label" for="exampleRadios44">
                                                    <span class="iconify" data-icon="bi:star-fill"></span>2 star or
                                                    above
                                                </label>
                                            </div>
                                            <div class="radio-right-text"></div>
                                        </div>

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterRating" type="checkbox"
                                                    name="filterRating" id="exampleRadios45" value="1">
                                                <label class="form-check-label" for="exampleRadios45">
                                                    <span class="iconify" data-icon="bi:star-fill"></span>1 star or
                                                    above
                                                </label>
                                            </div>
                                            <div class="radio-right-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item course-sidebar-accordion-item">
                                <h2 class="accordion-header course-sidebar-title" id="panelsStayOpen-headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                        Price
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingFour">
                                    <div class="accordion-body">
                                        <div class="range-value-box">
                                            <div class="range-value-wrap"><label for="min_price">Min:</label>
                                                <input type="number" min=0 max="9900" value="0" id=""
                                                    class="price-range-field min_price" />
                                            </div>
                                            <div class="range-value-wrap"><label for="max_price">Max:</label>
                                                <input type="number" min=0 max="10000" value="5.00" id=""
                                                    class="price-range-field max_price" />
                                            </div>
                                            <div class="range-value-wrap-go-btn d-flex align-items-center">
                                                <button type="button" class="filterPrice"><i
                                                        class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div>

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterLearnerAccessibility"
                                                    type="checkbox" name="filterLearnerAccessibility"
                                                    id="exampleRadiosAccessibility32" value="free">
                                                <label class="form-check-label" for="exampleRadiosAccessibility32">
                                                    Free
                                                </label>
                                            </div>
                                        </div>
                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterLearnerAccessibility"
                                                    type="checkbox" name="filterLearnerAccessibility"
                                                    id="exampleRadiosAccessibility33" value="paid">
                                                <label class="form-check-label" for="exampleRadiosAccessibility33">
                                                    Paid
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item course-sidebar-accordion-item">
                                <h2 class="accordion-header course-sidebar-title" id="panelsStayOpen-headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                        Duration
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingFive">
                                    <div class="accordion-body">

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterDuration" type="checkbox"
                                                    name="filterDuration" id="exampleRadiosDuration34" value="1">
                                                <label class="form-check-label" for="exampleRadiosDuration34">Less
                                                    Than 24 Hours</label>
                                            </div>
                                        </div>
                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterDuration" type="checkbox"
                                                    name="filterDuration" id="exampleRadiosDuration35" value="2">
                                                <label class="form-check-label" for="exampleRadiosDuration35">24 to
                                                    36 Hours</label>
                                            </div>
                                        </div>

                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterDuration" type="checkbox"
                                                    name="filterDuration" id="exampleRadiosDuration36" value="3">
                                                <label class="form-check-label" for="exampleRadiosDuration36">36 to
                                                    72 Hours</label>
                                            </div>
                                        </div>
                                        <div class="sidebar-radio-item">
                                            <div class="form-check">
                                                <input class="form-check-input filterDuration" type="checkbox"
                                                    name="filterDuration" id="exampleRadiosDuration37" value="4">
                                                <label class="form-check-label" for="exampleRadiosDuration37">Above
                                                    72 Hours</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Courses Sidebar End-->
                <!-- Show all course area start-->
                <div class="col-md-8 col-lg-9 col-xl-9 show-all-course-area-wrap">
                    @foreach($courses as $course)
                    <div class="show-all-course-area">
                        <!-- all courses grid Start-->
                        <div id="loading" class="no-course-found text-center d-none">
                            <div id="inner-status"><img src="{{ asset('assets') }}/images/uploads/courses/{{ $course->image }}" alt="img" /></div>
                        </div>
                        <div id="appendCourse">
                            <div class="row courses-grids" id="appendCourseList">
                                <!-- Course item start -->
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                    <div class="card course-item border-0 radius-3 bg-white">
                                        <div class="course-img-wrap overflow-hidden">
                                            <span
                                                class="course-tag badge radius-3 font-12 font-medium position-absolute bg-orange">Best
                                                Seller</span>
                                            <a href="{{ route('course-details', $course->id) }}">
                                                <img src="{{ asset('assets') }}/images/uploads/courses/{{ $course->image }}" style="height: 221px;"alt="course" class="img-fluid">
                                                </a>
                                            <div class="course-item-hover-btns position-absolute">
                                                <span class="course-item-btn addToWishlist" data-course_id="6"
                                                    data-route="student/add-to-wishlist.html"
                                                    title="Add to Wishlist">
                                                    <i data-feather="heart"></i>
                                                </span>
                                                <span class="course-item-btn addToCart" data-course_id="6"
                                                    data-route="student/add-to-cart.html" title="Add to Cart">
                                                    <i data-feather="shopping-bag"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title course-title"><a
                                                    href="{{ route('course-details', $course->id) }}">{{ $course->course_name }}</a></h5>
                                            <p class="card-text instructor-name-certificate font-medium font-12">
                                                {{-- <a href="users/74/profile.html">Saruwar Karim</a> --}}
                                            </p>
                                            <div class="course-item-bottom">
                                                <div class="course-rating d-flex align-items-center">
                                                    <span class="font-medium font-14 me-2">0.00</span>
                                                    <ul class="rating-list d-flex align-items-center me-2">
                                                        <li class=""><span class="iconify"
                                                                data-icon="bi:star-fill"></span></li>
                                                        <li class=""><span class="iconify"
                                                                data-icon="bi:star-fill"></span></li>
                                                        <li class=""><span class="iconify"
                                                                data-icon="bi:star-fill"></span></li>
                                                        <li class=""><span class="iconify"
                                                                data-icon="bi:star-fill"></span></li>
                                                        <li class=""><span class="iconify"
                                                                data-icon="bi:star-fill"></span></li>
                                                    </ul>
                                                    <span class="rating-count font-14">(87)</span>
                                                </div>
                                                <div class="instructor-bottom-item font-14 font-semi-bold">

                                                    <div class="instructor-bottom-item font-14 font-semi-bold">
                                                         ৳{{ $course->discount_price }}
                                                    </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- all courses grid End-->

                    </div>
                    @endforeach
                </div>
                <!-- Show all course area End-->
            </div>
        </div>
    </section>
    <!-- Courses Page Area End -->
</div>

<!-- some important hidden id for filter.js -->
<input type="hidden" class="route" value="get-filter-courses.html">
<input type="hidden" class="fetch-data-route" value="get-sub-category-courses/fetch-data.html">
<!-- Main Content End-->
@endsection
