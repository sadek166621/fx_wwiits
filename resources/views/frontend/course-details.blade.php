@extends('frontend.master')
    <!-- Header Part End -->
@section('content')
    <!-- Main Content Start-->
    <div class="bg-page">
        <!-- Course Single Page Header Start -->
        <header class="course-single-page-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="course-single-banner-content">
                                <h3 class="page-banner-heading text-white pb-30">{{ $courses->course_name }}</h3>
                                <p class="page-banner-sub-heading pb-30">{{ $courses->comments }}</p>
                                {{-- <p class="instructor-name-certificate font-medium font-12 text-white">
                                    <span class="text-decoration-underline">MDSunny Lasker</span>
                                    | Author Level 1
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Course Single Page Header End -->

        <!-- Course Single Details Area Start -->
        <section class="course-single-details-area before-login-purchase-course-details">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8">

                        <div class="course-single-details-left-content bg-white">

                            <!-- Tab panel nav list -->
                            <div class="course-tab-nav-wrap course-details-tab-nav-wrap d-flex justify-content-between">
                                <ul class="nav nav-tabs tab-nav-list border-0" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="Overview-tab" data-bs-toggle="tab"
                                            href="#Overview" role="tab" aria-controls="Overview"
                                            aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Curriculum-tab" data-bs-toggle="tab" href="#Curriculum"
                                            role="tab" aria-controls="Curriculum" aria-selected="false">Curriculum</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Discussion-tab" data-bs-toggle="tab" href="#Discussion"
                                            role="tab" aria-controls="Discussion" aria-selected="false">Discussion</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Review-tab" data-bs-toggle="tab" href="#Review"
                                            role="tab" aria-controls="Review" aria-selected="false">Review</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Instructor-tab" data-bs-toggle="tab" href="#Instructor"
                                            role="tab" aria-controls="Review" aria-selected="false">Instructor</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab panel nav list -->

                            <!-- Tab Content-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Overview" role="tabpanel"
                                    aria-labelledby="Overview-tab">
                                    <div class="overview-content">
                                        <div class="what-you-will-learn">
                                            <h4 class="pb-30">What you will learn</h4>

                                            <div class="what-you-learn-list-wrap d-flex justify-content-between">
                                                <ul>
                                                    <li>
                                                        <div class="check-wrap flex-shrink-0"><span class="iconify"
                                                                data-icon="akar-icons:check"></span></div>
                                                        <p class="flex-grow-1">{{ $courses->overview }}</p>
                                                    </li>
                                                </ul>

                                                <ul>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>{{ $courses->comment }}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Curriculum" role="tabpanel"
                                    aria-labelledby="Curriculum-tab">
                                    <div class="curriculum-content">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading0">
                                                    <button class="accordion-button font-medium font-18 " type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse0"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        {{ $courses->course_name }}
                                                    </button>
                                                </h2>
                                                <div id="collapse0" class="accordion-collapse collapse show"
                                                    aria-labelledby="heading0" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="play-list">

                                                            <!-- Note End-->
                                                            <!-- If User Logged In then add Class Name in play-list-item = "venobox"-->
                                                            <!-- If Preview has for this course add Class Name in play-list-item = "preview-enabled"-->
                                                            <!-- Note Start-->

                                                            <a class="edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3"
                                                                data-bs-toggle="modal" href="#newVideoPlayerModal10">
                                                                <div class="d-flex flex-grow-1">
                                                                    <div><img src="{{ asset('assets') }}/images/uploads/courses/{{ $courses->image }}"
                                                                            alt="play" style="height: 150px"></div>
                                                                    <div class="font-medium font-16 lecture-edit-title">
                                                                        {{ $courses->course_name }}</div>
                                                                </div>

                                                                <div class="upload-course-video-6-text flex-shrink-0">
                                                                    <span
                                                                        class="see-preview-video font-medium font-16">Preview</span>
                                                                    {{-- <span class="video-time-count">20:00</span> --}}
                                                                </div>
                                                            </a>

                                                            <!-- Youtube Video Player Modal Start-->
                                                            <div class="modal fade VideoTypeModal"
                                                                id="newVideoPlayerModal10" tabindex="-1"
                                                                aria-hidden="true">

                                                                <div class="modal-header border-bottom-0">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"><span
                                                                            class="iconify"
                                                                            data-icon="akar-icons:cross"></span></button>
                                                                </div>
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="video-player-area">
                                                                                <!-- Youtube Video -->
                                                                                <div class="plyr__video-embed js-player"
                                                                                    id="playerVideoYoutube">
                                                                                    <iframe
                                                                                        src="{{ $courses->vedio_link }}"
                                                                                        allowfullscreen
                                                                                        allowtransparency
                                                                                        allow="autoplay"></iframe>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Discussion" role="tabpanel"
                                    aria-labelledby="Discussion-tab">
                                    <div class="row">
                                        <div class="no-course-found text-center">
                                            <img src="{{ asset('frontend') }}/css/img/empty-data-img.png" alt="img" class="img-fluid">
                                            <h5 class="mt-3">No Discussion Found</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Review" role="tabpanel" aria-labelledby="Review-tab">
                                    <div class="review-content">

                                        <!-- Review Tab Top Part Start-->
                                        <div
                                            class="review-tab-top-part d-flex justify-content-between align-items-center">
                                            <div class="review-tab-count-box radius-3 text-center">
                                                <h3 class="">0.0</h3>
                                                <ul class="rating-list d-flex align-items-center">
                                                    <li class=""><span class="iconify" data-icon="bi:star-fill"></span>
                                                    </li>
                                                    <li class=""><span class="iconify" data-icon="bi:star-fill"></span>
                                                    </li>
                                                    <li class=""><span class="iconify" data-icon="bi:star-fill"></span>
                                                    </li>
                                                    <li class=""><span class="iconify" data-icon="bi:star-fill"></span>
                                                    </li>
                                                    <li class=""><span class="iconify" data-icon="bi:star-fill"></span>
                                                    </li>
                                                </ul>
                                                <p>0 Reviews</p>
                                            </div>

                                            <div class="review-progress-bar-wrap">
                                                <!-- Progress Bar -->
                                                <div class="barras">
                                                    <div class="progress-bar-box d-flex align-items-center">
                                                        <div class="progress-hint">
                                                            <div class="progress-star d-flex align-items-center me-2">
                                                                <div class="hint-number me-3 font-medium color-heading">
                                                                    5</div>
                                                                <ul class="rating-list d-flex align-items-center">
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="barra">
                                                            <div class="barra-nivel" data-nivel="0.00%"></div>
                                                        </div>
                                                        <div class="progress-hint-value font-14 color-heading">0</div>
                                                    </div>
                                                </div>
                                                <!-- Progress Bar -->
                                                <div class="barras">
                                                    <div class="progress-bar-box d-flex align-items-center">
                                                        <div class="progress-hint">
                                                            <div class="progress-star d-flex align-items-center me-2">
                                                                <div class="hint-number me-3 font-medium color-heading">
                                                                    4</div>
                                                                <ul class="rating-list d-flex align-items-center">
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="barra">
                                                            <div class="barra-nivel" data-nivel="0.00%"></div>
                                                        </div>
                                                        <div class="progress-hint-value font-14 color-heading">0</div>
                                                    </div>
                                                </div>
                                                <!-- Progress Bar -->
                                                <div class="barras">
                                                    <div class="progress-bar-box d-flex align-items-center">
                                                        <div class="progress-hint">
                                                            <div class="progress-star d-flex align-items-center me-2">
                                                                <div class="hint-number me-3 font-medium color-heading">
                                                                    3</div>
                                                                <ul class="rating-list d-flex align-items-center">
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="barra">
                                                            <div class="barra-nivel" data-nivel="0.00%"></div>
                                                        </div>
                                                        <div class="progress-hint-value font-14 color-heading">0</div>
                                                    </div>
                                                </div>
                                                <!-- Progress Bar -->
                                                <div class="barras">
                                                    <div class="progress-bar-box d-flex align-items-center">
                                                        <div class="progress-hint">
                                                            <div class="progress-star d-flex align-items-center me-2">
                                                                <div class="hint-number me-3 font-medium color-heading">
                                                                    2</div>
                                                                <ul class="rating-list d-flex align-items-center">
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="barra">
                                                            <div class="barra-nivel" data-nivel="0.00%"></div>
                                                        </div>
                                                        <div class="progress-hint-value font-14 color-heading">0</div>
                                                    </div>
                                                </div>
                                                <!-- Progress Bar -->
                                                <div class="barras">
                                                    <div class="progress-bar-box d-flex align-items-center">
                                                        <div class="progress-hint">
                                                            <div class="progress-star d-flex align-items-center me-2">
                                                                <div class="hint-number me-3 font-medium color-heading">
                                                                    1</div>
                                                                <ul class="rating-list d-flex align-items-center">
                                                                    <li class="star-full"><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                    <li><span class="iconify"
                                                                            data-icon="bi:star-fill"></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="barra">
                                                            <div class="barra-nivel" data-nivel="0.00%"></div>
                                                        </div>
                                                        <div class="progress-hint-value font-14 color-heading">0</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Review Tab Top Part End-->

                                        <!-- Customer review Part Start-->
                                        <div class="customer-review-part">

                                            <div id="appendReviews">
                                            </div>

                                        </div>
                                        <!-- Customer review Part End-->

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Instructor" role="tabpanel"
                                    aria-labelledby="Instructor-tab">
                                    <div class="row">
                                        <h6 class="mb-4 col-12">Meet Your Instructor</h6>

                                        <div class="meet-instructor-item-wrap">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="course-single-details-right-content">
                            <div class="course-info-box bg-white">

                                <div
                                    class="video-area-left position-relative d-flex align-items-center justify-content-center">
                                    <div class="course-info-video-img"><img
                                            src="{{ asset('assets') }}/images/uploads/courses/{{ $courses->image }}" style="height: 221px" alt="video"
                                            class="img-fluid"></div>
                                    <button type="button" class="play-btn position-absolute" data-bs-toggle="modal"
                                        data-bs-target="#newVideoPlayerModal">
                                        <img src="{{ asset('frontend') }}/css/img/icons-svg/play.svg" alt="play">
                                    </button>
                                </div>
                                <div
                                    class="course-price-box d-flex justify-content-between align-items-center mt-30 mb-30">
                                    <div>
                                        <h4 class="d-flex align-items-center mb-1"> Free </h4>
                                    </div>
                                </div>

                                <div class="course-includes-box course-includes-box-top">
                                    <ul class="pb-30">
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <span class="iconify" data-icon="bytesize:clock"></span>
                                                <span>Course Duration</span>
                                            </div>
                                            <div>{{ $courses->course_duration }}</div>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <span class="iconify" data-icon="carbon:increase-level"></span>
                                                <span>Course Level</span>
                                            </div>
                                            <div>{{ $courses->course_level }}</div>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <span class="iconify" data-icon="heroicons-outline:users"></span>
                                                <span>Student Enrolled</span>
                                            </div>
                                            <div>71</div>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <span class="iconify" data-icon="cil:language"></span>
                                                <span>Language</span>
                                            </div>
                                            <div>English</div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="course-info-box-wishlist-btns d-flex mb-30">
                                    <p class="bg-white">This is course is private</p>
                                </div>


                                <div class="course-info-box-wishlist-btns d-flex mb-30">
                                    <button class="theme-btn para-color font-medium mx-2 addToWishlist"
                                        title="Add to wishlist" data-course_id="12"
                                        data-route=".{{ asset('frontend') }}/student/add-to-wishlist.html"><span class="iconify me-2"
                                            data-icon="bytesize:heart"></span>Add to Wishlist</button>
                                    <button class="theme-btn para-color font-medium mx-2" title="Share this course"
                                        data-bs-toggle="modal" data-bs-target="#shareThisCourseModal"><span
                                            class="iconify me-2" data-icon="ci:share-outline"></span>Share
                                        Course</button>
                                </div>

                                <div class="course-includes-box mb-30">
                                    <h6 class="pb-30">This Course Includes</h6>
                                    <ul>
                                        <li>
                                            <span class="iconify" data-icon="bi:camera-video"></span>
                                            <span>20 min 0 sec Video Lectures</span>
                                        </li>
                                        <li>
                                            <span class="iconify"
                                                data-icon="healthicons:i-exam-multiple-choice-outline"></span>
                                            <span>0 Quizzes</span>
                                        </li>
                                        <li>
                                            <span class="iconify" data-icon="bi:book"></span>
                                            <span>0 Assignments</span>
                                        </li>
                                        <li>
                                            <span class="iconify" data-icon="akar-icons:download"></span>
                                            <span>0 Downloadable Resources</span>
                                        </li>
                                        <li>
                                            <span class="iconify" data-icon="bytesize:clock"></span>
                                            <span>Full Lifetime Access</span>
                                        </li>
                                        <li>
                                            <span class="iconify" data-icon="lucide:award"></span>
                                            <span>Certificate of Completion</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Course Single Details Area End -->
    </div>

    <!--Share This Course Modal Start-->
    <div class="modal fade" id="shareThisCourseModal" tabindex="-1" aria-labelledby="shareThisCourseModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="shareThisCourseModalLabel">Share This Course</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="share-course-list">
                        <li><a
                                href="#"><span
                                    class="iconify" data-icon="cib:facebook-f"></span></a></li>
                        <li><a
                                href="#"><span
                                    class="iconify" data-icon="el:twitter"></span></a></li>
                        <li><a
                                href="#"><span
                                    class="iconify" data-icon="cib:linkedin-in"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Share This Course Modal End-->

    <input type="hidden" class="courseReviewPaginateRoute" value=".{{ asset('frontend') }}/review-paginate/12.html">

    <!-- New Video Player Modal Start-->
    <div class="modal fade VideoTypeModal" id="newVideoPlayerModal" tabindex="-1" aria-labelledby="newVideoPlayerModal"
        aria-hidden="true">

        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify"
                    data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="video-player-area">
                        <div class="plyr__video-embed" id="youtubePlayer2">
                            <iframe src="{{ $courses->vedio_link }}" allowfullscreen allowtransparency
                                allow="autoplay">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Video Player Modal End-->

    <!--  Text Upload Modal Start -->
    <div class="modal fade textUploadModal venoBoxTypeModal" id="textUploadModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify"
                    data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="getLectureText"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Text Upload Modal End -->

    <!-- Image Upload Modal Start -->
    <div class="modal fade textUploadModal venoBoxTypeModal" id="imageUploadModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify"
                    data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="#" alt="" class="img-fluid getLectureImage">
                </div>
            </div>
        </div>
    </div>
    <!-- Image Upload Modal End -->

    <!-- Slide Show Upload Modal Start-->
    <div class="modal fade venoBoxTypeModal" id="slideModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify"
                    data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe class="getLectureSlide" src="#" width="100%" height="400" frameborder="0"
                        scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide Show Upload Modal End-->

    <!-- Audio Player Modal Start-->
    <div class="modal fade venoBoxTypeModal" id="audioPlayerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify"
                    data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <!--Audio -->
                    <audio class="getLectureAudio" src="#" type="audio/mp3" style="width: 550px" controls
                        controlsList="nodownload">
                    </audio>
                </div>
            </div>
        </div>
    </div>
    <!-- Audio Player Modal End-->
    <!-- Main Content End-->

    @endsection
