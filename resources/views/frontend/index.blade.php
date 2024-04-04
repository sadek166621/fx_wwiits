@extends('frontend.master')
@section('content')
<section class="">
    <!-- Carousle Section Start  -->
    <section class="">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach ( $sliders as $slider )
            <div class="carousel-item active">
              <div class="text-center d-flex flex-column justify-content-center align-items-center" style="background-image: url({{ asset('assets') }}/images/uploads/sliders/{{ $slider->image }}); background-repeat: no-repeat;
              height: 700px;">
                <div class="d-flex text-light flex-column justify-content-center align-items-center">
                  <h1 class="fw-bold mb-2"style="text-shadow: 0 0 1px #000000, 0 0 4px #000000;">{{ $slider->title }} <br> {{ $slider->subtitle }}</h1>
                  <p class="fw-medium text-light"style="text-shadow: 0 0 1px #000000, 0 0 4px #000000;">{{ $slider->button_text }}</p>
                  @if(!session()->has('StudentId'))
                  <ul class="d-flex mt-5">
                    <li class="list-unstyled">
                      <a class=" text-decoration-none fw-bold pri-btn m-2" aria-current="page" href="{{ route('student.signin') }}">Log In</a>
                    </li>
                    <li class="list-unstyled">
                      <a class=" text-decoration-none fw-bold pri-btn m-2" aria-current="page" href="{{ route('student.signup') }}">Sign UP</a>
                    </li>
                  </ul>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
          </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Banner Card Start -->
    <div class="container card-pos px-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card d-flex justify-content-center align-items-center shadow p-3 mb-5 bg-white rounded">
            <img src="{{ asset('frontend') }}/images/feature-icon1.png" class="img-fluid card-img-top p-3 w-25" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title text-color">Courses</h5>
              <p class="card-text text-dark">There are 1000+ video classes and live classes, help line</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card d-flex justify-content-center align-items-center shadow p-3 mb-5 bg-white rounded" style="height: 324px;">
            <img src="{{ asset('frontend') }}/images/feature-icon2.png" class="img-fluid card-img-top p-3 w-25" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title text-color">Certificate</h5>
              <p class="card-text text-start text-dark">There are three certificate benefits, the first certificate after
                completing the
                first two months course. The second certificate will be issued after six months and the third
                certificate after one year</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card d-flex justify-content-center align-items-center shadow p-3 mb-5 bg-white rounded">
            <img src="{{ asset('frontend') }}/images/feature-icon3.png" class="img-fluid card-img-top p-3 m-md-0 w-25" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title text-color">Earning</h5>
              <p class="card-text text-dark">You can do marketing work from one month after joining the company</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Card End -->
    <!-- Carousel Section End  -->
  </section>
  <!-- Banner Part End -->


  <!-- Customer Opinion Start -->
  <section class="customer-background text-white ">
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
            <p class="my-4 text-light">Wonderful serenity has taken possession of my entire soul, like these sweet mornings of
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
            <p class="my-4 text-light">Wonderful serenity has taken possession of my entire soul, like these sweet mornings of
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
              <p class="text-light" >MARKETER</p>
            </div>
          </div>
          <hr>
          <div class="p-3">
            <h4 class="fw-bold mb-2">Great instructor, great course</h4>
            <p class="my-4 text-light">Wonderful serenity has taken possession of my entire soul, like these sweet mornings of
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
  </section>    <!-- Carousle Section Start  -->



  @endsection
