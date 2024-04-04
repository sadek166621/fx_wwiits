<footer class="bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="co-12 col-md-3 mt-5 pt-md-5">
          <div>
            <a href="{{ route('home') }}"> <img class="footer-logo" src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}"></a>
        </div>
          <div class="mt-3 text-white">
            <a class="text-white" href="https://www.facebook.com/gurudigitalit"><i class="fa-brands fa-facebook me-3"></i></a>
            <a class="text-white" href="https://www.youtube.com/@GuruDigitalIt"><i class="fa-brands fa-youtube me-3"></i></a>
            <a class="text-white" href="https://www.tiktok.com/@gurudigitalit?lang=en"><i class="fa-brands fa-tiktok me-3"></i></a>
            <a class="text-white" href="https://www.pinterest.com/gurudigitalit/"><i class="fa-brands fa-pinterest"></i></a>
          </div>
        </div>
        <div class="col-6 col-md-3 mt-3 mt-md-5 pt-3 pt-md-5">
          <h5 class="mb-4">Company</h5>
          <ul class="list-unstyled mb-3">
            <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('about') }}">About</a></li>
            <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('privact-policy') }}">FAQ</a></li class="mb-2">
            <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('blog') }}">Blog</a></li class="mb-2">
          </ul>
        </div>
        <div class="col-6 col-md-3 mt-3 mt-md-5 pt-3 pt-md-5">
          <h5 class="mb-4">Support</h5>
          <ul class="list-unstyled mb-3">
            <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('contact') }}">Contact</a></li>
            <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('support') }}">Support</a></li class="mb-2">
            <li class="mb-3"><a class="text-decoration-none text-light" href="{{ route('course') }}">Courses</a></li class="mb-2">
          </ul>
        </div>
        <div class="col-12 col-md-3 mt-3 mt-md-5 pt-3 pt-md-5">
          <h5 class="mb-4">Contact Info</h5>
          <p class="text-light"><i class="fa-solid fa-location-dot text-primary"></i> <span class="ms-2">Dhaka</span>
          </p>
          <p class="text-light"><i class="fa-solid fa-phone text-primary"></i> <span class="ms-2"><a href="tel:+8801745457430">01745457430</a></span></p>
          <p class="text-light"><i class="fa-solid fa-envelope text-primary"></i> <span
              class="ms-2"><a href="mailto:gurudigitalit@gmail.com">gurudigitalit@gmail.com</a>
            </span></p>
        </div>
        <div class="row copyright-wrapper mt-5">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="footer-payment">
                <img src="{{ asset('frontend') }}/css/img/payment-cards.png" alt="payments">
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="copyright-text text-center">
                <p class="text-white font-13"> <i class="fa-regular fa-copyright"></i> 2023 Guru Digital IT. All Rights
                  Reserved.</p>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="footer-bottom-nav">
                <ul class="d-flex justify-content-end">
                  <li><a class="text-decoration-none" href="{{ route('instractor') }}">Instructor</a></li>
                  <li><a class="text-decoration-none" href="{{ route('become-instractor') }}">Become
                      Instructor</a></li>
                  <li><a class="text-decoration-none" href="{{ route('verify-certificate') }}">Verify Certificate</a></li>
                </ul>
              </div>
            </div>
         </div>
      </div>
    </div>
  </footer>
