@extends('frontend.master')
@section('content')
<div class="bg-page">
    <!-- Page Header Start -->
    <header class="page-banner-header gradient-bg position-relative">
      <div class="section-overlay">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
              <div class="page-banner-content text-center">
                <h3 class="page-banner-heading text-white pb-15">Contact Us</h3>

                <!-- Breadcrumb Start-->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item font-14"><a class="text-decoration-none" href="index.html">Home</a></li>
                    <li class="breadcrumb-item font-14 active" aria-current="page">Contact Us</li>
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

    <!-- Contact Page Area Start -->
    <section class="contact-page-area section-t-space">
      <div class="container">
        <div class="row">
          <!-- Contact page left side start-->
          <div class="col-md-6 col-lg-5 bg-white contact-page-left-side">

            <div class="contact-page-left-side-wrap">
              <h5 class="contact-form-title font-24 font-semi-bold">Get in Touch</h5>

              <!-- Contact Info Item Start-->
              <div class="contact-info-item d-flex align-items-center">
                <div class="flex-shrink-0 contact-icon-img-wrap">
                  <img src="{{ asset('frontend') }}/css/img/icons-svg/contact-icon-1.png" alt="feature">
                </div>
                <div class="flex-grow-1 ms-3 contact-info-content">
                  <p>Dhaka</p>
                </div>
              </div>
              <!-- Contact Info Item End-->

              <!-- Contact Info Item Start-->
              <div class="contact-info-item d-flex align-items-center">
                <div class="flex-shrink-0 contact-icon-img-wrap">
                  <img src="{{ asset('frontend') }}/css/img/icons-svg/contact-icon-2.png" alt="feature">
                </div>
                <div class="flex-grow-1 ms-3 contact-info-content">
                  <p>gurudigitalit@gmail.com</p>
                  <!--<p>youthdigital2020@gmail.com</p>-->
                </div>
              </div>
              <!-- Contact Info Item End-->

              <!-- Contact Info Item Start-->
              <div class="contact-info-item d-flex align-items-center">
                <div class="flex-shrink-0 contact-icon-img-wrap">
                  <img src="{{ asset('frontend') }}/css/img/icons-svg/contact-icon-3.png" alt="feature">
                </div>
                <div class="flex-grow-1 ms-3 contact-info-content">
                  <p>01745457430</p>
                  <!--<p>01332367685</p>-->
                </div>
              </div>
              <!-- Contact Info Item End-->

              <div class="contact-bottom-content">
                <p class="color-gray mt-3">Strikes the upper surface of the impenetrable foliage of my trees, and but a
                  few stray gleams steal about the human. It might take 8 -12 hour to replay</p>
              </div>
            </div>

          </div>
          <!-- Contact page left side End-->

          <!-- Contact page right side start-->
          <div class="col-md-6 col-lg-7 bg-white contact-page-right">
            <div class="contact-form-area">
              <h5 class="contact-form-title font-24 font-semi-bold">Help-line</h5>
              <form>
                <div class="row">
                  <div class="col-md-6 mb-30">
                    <input type="text" class="form-control" id="inputName" placeholder="Your name*">
                  </div>
                  <div class="col-md-6 mb-30">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Your Email*">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-30">
                    <select id="inputState" class="form-select contact_us_issue_id">
                      <option value="">Select an Issue</option>
                      <option value="2">Request to delete account</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-30">
                    <textarea class="form-control message" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <button type="button"
                    class="theme-btn theme-button1 theme-button3 w-100 font-15 fw-bold submitContactUs">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Contact page right side End-->
        </div>

        <!-- Google Map Part Start-->
        <div class="row google-map-area section-t-space">
          <div class="col-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1839.0179632416985!2d89.55385027622!3d22.801132631062536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8f2b1098bf95%3A0xbce09c90b98f8380!2sJust%20Orders%20Khulna!5e0!3m2!1sen!2sbd!4v1636005141952!5m2!1sen!2sbd"
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <!-- Google Map Part End-->
      </div>
    </section>
    <!-- Contact Page Area End -->
  </div>
  <input type="hidden" value="#" class="contactStoreRoute">
  @endsection
