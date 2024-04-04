@extends('frontend.master2')
@section('content')
<header class="hero-area gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-10 col-lg-10 mx-auto">
                    <div
                        class="d-flex text-center text-light flex-column justify-content-center align-items-center mb-5">
                        <h1 class="fw-bold mb-2">Guru Digital IT <br> E-Learning & Earning Platfrom</h1>
                        <p class="fw-medium text-light">The main objective of this set up is how to use online
                            social media in our
                            society.</p>
                    </div>

                    <div class="hero-btns mb-4 row gy-4">
                        <div class=" bg-white text-black col-12 py-2">
                            <h3 class="text-center">Help-Line</h3>

                            <div class="d-flex align-items-center justify-content-center p-2 my-1"
                                style="background-color: RGB(40, 167, 69, .3)">
                                <div class="mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                </div>
                                <div class="mx-2">
                                    <p class='text-dark'>Any kind of problem join here for solution</p>
                                </div>
                                <a href="#"
                                    class="p-2 bg-primary rounded text-white border-white">Telegram <i
                                        data-feather="support"></i></a>
                            </div>

                            <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                                <div class="col-12">
                                    <h5 class="my-3 text-center">Team Leader</h5>
                                </div>
                                <div class="col-6">
                                    Name: {{ $leader->t_name }}
                                </div>
                                <div class="col-6">
                                    <a href="https://wa.me/{{ $leader->t_phone }}"
                                        class="theme-btn bg-black text-white border-white col-12">Whatsapp <i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                                <div class="col-12">
                                    <h5 class="my-3 text-center">Trainer</h5>
                                </div>
                                <div class="col-6">
                                    Name: {{ $teacher->name }}
                                </div>
                                <div class="col-6">
                                    <a href="https://wa.me/{{ $teacher->phone }}"
                                        class="theme-btn bg-black text-white border-white col-12">Whatsapp <i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white text-black p-2 py-4 col-12">
                            <h5 class="my-3 text-center">Join Live Classes</h5>

                           @foreach ($schedules as $schedule )
                           <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                            <div class="col-6">
                                Class Topic: {{  $schedule->tropic }} <br>
                                Joining Date: {{  $schedule->date }}
                                <br>
                                Joining Time: {{  $schedule->time }}

                            </div>
                            <div class="col-6">
                                <a href="{{  $schedule->link }}" target="_blank"
                                    class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                        data-feather="arrow-right"></i></a>
                            </div>
                        </div>
                           @endforeach

                            {{-- <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                                <div class="col-6">
                                    Class Topic: Learn Al Quran <br>
                                    Joining Time: 8:00am-9:00am
                                </div>
                                <div class="col-6">
                                    <a href="#" target="_blank"
                                        class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                                <div class="col-6">
                                    Class Topic: Graphic Design <br>
                                    Joining Time: 10:00am-11:00am
                                </div>
                                <div class="col-6">
                                    <a href="#" target="_blank"
                                        class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="row border border-black p-2 mx-4 my-2 align-items-center">

                                <div class="col-6">
                                    Class Topic: Data Entry <br>
                                    Joining Time: 11:00Am-12:00Am
                                </div>
                                <div class="col-6">
                                    <a href="#" target="_blank"
                                        class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                                <div class="col-6">
                                    Class Topic: Photo Editing <br>
                                    Joining Time: 4:00 pm-5:00 pm
                                </div>
                                <div class="col-6">
                                    <a href="#" target="_blank"
                                        class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                            data-feather="arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                                <div class="col-6">
                                    Class Topic: Video Editing <br>
                                    Joining Time: 6:15pm-7:00pm
                                </div>
                                <div class="col-6">
                                    <a href="#" target="_blank"
                                        class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                        data-feather="arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="row border border-black p-2 mx-4 my-2 align-items-center">
                                <div class="col-6">
                                    Class Topic: Social Marketing <br>
                                    Joining Time: 10:00am-12:00Am
                                </div>
                                <div class="col-6">
                                    <a href="#" target="_blank"
                                    class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                    data-feather="arrow-right"></i></a>
                                </div>
                            </div> --}}



                        </div>

                        <div class="bg-white text-black p-2 py-4 col-12">

                            <h3 class="text-center my-2">GuruDigital IT Support</h3>

                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                </div>
                                <div class="mx-2">
                                    <p>Any kind of problem join here for solution</p>
                                </div>
                                <a href="https://wa.me/01745457430" class="p-2 bg-black text-white border-white rounded">Whatsapp <i
                                        data-feather="support"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Banner Card Start -->
<section class="container card-pos px-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card shadow d-flex justify-content-center align-items-center">
                <img src="{{ asset('frontend') }}/images/feature-icon1.png" class="img-fluid card-img-top p-3 w-25" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-color">Courses</h5>
                    <p class="card-text text-dark">There are 1000+ video classes and live classes, help line</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow d-flex justify-content-center align-items-center h-100">
                <img src="{{ asset('frontend') }}/images/feature-icon2.png" class="img-fluid card-img-top p-3 w-25" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-color">Certificate</h5>
                    <p class="card-text text-start text-dark">There are three certificate benefits, the first
                        certificate after
                        completing the
                        first two months course. The second certificate will be issued after six months and the
                        third
                        certificate after one year</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow d-flex justify-content-center align-items-center">
                <img src="{{ asset('frontend') }}/images/feature-icon3.png" class="img-fluid card-img-top p-3 m-md-0 w-25" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-color">Earning</h5>
                    <p class="card-text text-dark">You can do marketing work from one month after joining the
                        company</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Card End -->

<!-- Customer Opinion Start -->
<section class="customer-background text-white mt-3">
    <div class="d-flex justify-content-center align-items-center">
        <img class="mt-5" src="{{ asset('frontend') }}/images/customers-say-heading-img.png" alt="">
    </div>
    <h1 class="fw-bold text-center my-4">What Our Valuable Customers Say.</h1>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="d-flex">
                    <img class="me-3" src="{{ asset('frontend') }}/images/quote.svg" alt="">
                    <div>
                        <h5>DANIEL JHON</h5>
                        <p class="text-light">UI/UX DESIGNER</p>
                    </div>
                </div>
                <hr>
                <div class="p-3">
                    <h4 class="fw-bold mb-2">Great instructor, great course</h4>
                    <p class="my-4 text-light">Wonderful serenity has taken possession of my entire soul, like these
                        sweet mornings of
                        spring which I
                        enjoy with my whole heart. I am alone, and feel the charm of existence in this spot</p>
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex">
                    <img class="text-black me-3" src="{{ asset('frontend') }}/images/quote.svg" alt="">
                    <div>
                        <h5>NORTH</h5>
                        <p class="text-light">DEVELOPER</p>
                    </div>
                </div>
                <hr>
                <div class="p-3">
                    <h4 class="fw-bold mb-2">Great instructor, great course</h4>
                    <p class="my-4 text-light">Wonderful serenity has taken possession of my entire soul, like these
                        sweet mornings of
                        spring which I
                        enjoy with my whole heart. I am alone, and feel the charm of existence in this spot</p>
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star-half-stroke text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex">
                    <img class="text-black me-3" src="{{ asset('frontend') }}/images/quote.svg" alt="">
                    <div>
                        <h5>HIBRUPATH</h5>
                        <pclass="text-light">MARKETER</p>
                    </div>
                </div>
                <hr>
                <div class="p-3">
                    <h4 class="fw-bold mb-2">Great instructor, great course</h4>
                    <p class="my-4 text-light">Wonderful serenity has taken possession of my entire soul, like these
                        sweet mornings of
                        spring which I
                        enjoy with my whole heart. I am alone, and feel the charm of existence in this spot</p>
                    <div>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Customer Opinion End -->

<!-- Information Start -->
<section class="container mt-5 py-5">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 p-5 p-lg-0">
            <div class="d-flex justify-content-center align-items-center">
                <img class="w-25" src="{{ asset('frontend') }}/images/1.png" alt="">
                <div class="ms-3 text-color">
                    <h4>Successfully trained</h4>
                    <p>10000+ students</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 p-5 p-lg-0">
            <div class="d-flex justify-content-center align-items-center">
                <img class="w-25" src="{{ asset('frontend') }}/images/2.png" alt="">
                <div class="ms-3 text-color">
                    <h4>Video courses</h4>
                    <p>10000+ students</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 p-5 p-lg-0">
            <div class="d-flex justify-content-center align-items-center">
                <img class="w-25" src="{{ asset('frontend') }}/images/3.png" alt="">
                <div class="ms-3 text-color">
                    <h4>Expert instructor</h4>
                    <p>10000+ students</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 p-5 p-lg-0">
            <div class="d-flex justify-content-center align-items-center">
                <img class="w-25" src="{{ asset('frontend') }}/images/4.png" alt="">
                <div class="ms-3 text-color">
                    <h4>Proudly Received</h4>
                    <p>10000+ students</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Information End -->

<!-- Main Content End-->
@endsection
