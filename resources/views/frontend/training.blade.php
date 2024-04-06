<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> FX WWIITS | Financial Investment</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('new-assets')}}/assets/images/favicon.png" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('new-assets')}}/assets/css/bootstrap.min.css">
	<!-- Plugin css -->
	<link rel="stylesheet" href="{{asset('new-assets')}}/assets/css/plugin.css">
	<!-- Flaticon -->
	<link rel="stylesheet" href="{{asset('new-assets')}}/assets/css/flaticon.css">

	<!-- stylesheet -->
	<link rel="stylesheet" href="{{asset('new-assets')}}/assets/css/style.css">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('new-assets')}}/assets/css/responsive.css">
</head>

<body>
	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->

	<!--Header Area Start-->
	<header>
        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('new-assets')}}/assets/images/FX-logo.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                                    aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse fixed-height" id="main_menu">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('home')}}">Home
                                            <div class="mr-hover-effect"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('about')}}">About
                                            <div class="mr-hover-effect"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('deposit')}}">Deposit
                                            <div class="mr-hover-effect"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('training')}}">Training
                                            <div class="mr-hover-effect"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('faq')}}">FAQ
                                            <div class="mr-hover-effect"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">Contact
                                            <div class="mr-hover-effect"></div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="nav-button">
                                    <a href="{{ route('student.signin') }}" class="base-btn2"> Login</a>
                                    <a href="{{ route('student.signup') }}" class="base-btn2"> Register</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<!--Header Area Start-->

	<!-- Main Area Start-->
	<main>
		<!-- Breadcrumb Area Start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h4 class="title extra-padding">
							Training
						</h4>
						<ul class="breadcrumb-list">
							<li>
								<a href="index.html">
									<i class="fas fa-home"></i>
									Home
								</a>
							</li>
							<li>
								<span><i class="fas fa-chevron-right"></i> </span>
							</li>
							<li>
								<a href="training.html">Training</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- Breadcrumb Area End -->

		<!-- Blog Page Grid Area Start -->
		<section class="blog-page single-blog-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img1.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										Introduction To Financial Markets
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img2.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										How To Create a Forex Trading Plan
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img3.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										Understanding Technical Analysis
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img4.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										Fibonacci Theory
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img5.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										Fibonacci Theory
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img6.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										Understanding Technical Analysis
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img1.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										How To Create a Forex Trading Plan
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img2.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										Introduction To Financial Markets
									</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<div class="img">
								<img src="{{asset('new-assets')}}/assets/images/blog/img3.png" alt="">
							</div>
							<div class="content">
								<ul class="top-meta">
									<li>
										<p class="date">
											21 Aug, 2019
										</p>
									</li>
									<li>
										<p class="post-by">
											By, Admin
										</p>
									</li>
								</ul>
								<a href="training-details.html">
									<h4 class="title">
										Introduction To Financial Markets
									</h4>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Previous">
										<span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
									</a>
								</li>
								<li class="page-item"><a class="page-link active" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Page Grid Area End -->
	</main>
	<!-- Main Area End-->

	<!-- Footer Area Start -->
	<footer class="footer" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="footer-widget about-widget">
						<div class="fotter-logo">
							<img src="{{asset('new-assets')}}/assets/images/FX-logo.png" alt="">
						</div>
						<div class="about-content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor nemo error sit
								voluptatem consectetur repellat.
							</p>
						</div>
						<div class="subscribe-area">
							<form action="#" class="subscribe-form">
								<input type="email" placeholder="Enter Email to Subscribe">
								<button type="submit" class="submit-btn"><i class="far fa-paper-plane"></i></button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							Account
						</h4>
						<ul class="link-list">
							<li>
								<a href="index.html">
									<i class="fas fa-angle-double-right"></i>Home
								</a>
							</li>
							<li>
								<a href="about.html">
									<i class="fas fa-angle-double-right"></i>About
								</a>
							</li>
							<li>
								<a href="deposit.html">
									<i class="fas fa-angle-double-right"></i>Deposit
								</a>
							</li>
							<li>
								<a href="training.html">
									<i class="fas fa-angle-double-right"></i>Training
								</a>
							</li>
							<li>
								<a href="contact.html">
									<i class="fas fa-angle-double-right"></i>Contact
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="footer-widget info-link-widget link-w-2">
						<h4 class="title">
							Company
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Terms
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Privacy
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Security
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Support
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Careers
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="left-area">
							<p>Copyright © 2024. All Rights Reserved By FX WWIITS.
							</p>
						</div>
					</div>
					<div class="col-lg-7">
						<ul class="social-links">
							<li>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Instagram">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest">
									<i class="fab fa-pinterest-p"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->

	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>
	<!-- Back to Top End -->

	<!-- jquery -->
	<script src="{{asset('new-assets')}}/assets/js/jquery.js"></script>
	<!-- popper -->
	<script src="{{asset('new-assets')}}/assets/js/popper.min.js"></script>
	<!-- bootstrap -->
	<script src="{{asset('new-assets')}}/assets/js/bootstrap.min.js"></script>
	<!-- plugin js-->
	<script src="{{asset('new-assets')}}/assets/js/plugin.js"></script>
	<!-- main -->
	<script src="{{asset('new-assets')}}/assets/js/main.js"></script>
</body>

</html>
