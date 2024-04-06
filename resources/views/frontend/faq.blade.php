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
                                        <a class="nav-link active" href="{{route('about')}}">About
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
                                        <a class="nav-link" href="{{route('faq')}}">FAQ
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

	<!-- Main Area Start -->
	<main>
		<!-- Breadcrumb Area Start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h4 class="title extra-padding">
							FAQ
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
								<a href="faq.html">FAQ</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- Breadcrumb Area End -->

		<!-- Faq Area Start -->
		<section class="faq-area2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10">
						<div class="section-heading">
							<h2 class="title  extra-padding">
								Frequently Asked
								Qestions
							</h2>
							<p class="text">
								We use the latest technologies and tools in order to create a better code that not only
								works great, but it is easy easy to work with too.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="content">
							<div class="accordion" id="tour-faq2">
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title" data-toggle="collapse" data-target="#collapseOne"
											aria-expanded="true" aria-controls="collapseOne">
											<i class="far fa-file-pdf"></i> Which license do I need?
										</h4>
									</div>

									<div id="collapseOne" class="collapse show" data-parent="#tour-faq2">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title collapsed" data-toggle="collapse" data-target="#collapseTwo"
											aria-expanded="false" aria-controls="collapseTwo">
											<i class="fas fa-unlock-alt"></i> How do I get access to a App ?
										</h4>
									</div>
									<div id="collapseTwo" class="collapse" data-parent="#tour-faq2">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title collapsed" data-toggle="collapse" data-target="#collapseThree"
											aria-expanded="false" aria-controls="collapseThree">
											<i class="far fa-credit-card"></i> How do I see previous orders?
										</h4>
									</div>
									<div id="collapseThree" class="collapse" data-parent="#tour-faq2">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title collapsed" data-toggle="collapse" data-target="#collapseFour"
											aria-expanded="false" aria-controls="collapseFour">
											<i class="fas fa-money-bill-wave"></i> it is refundable?
										</h4>
									</div>
									<div id="collapseFour" class="collapse" data-parent="#tour-faq2">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="content">
							<div class="accordion" id="tour-faq3">
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title" data-toggle="collapse" data-target="#collapse5"
											aria-expanded="true" aria-controls="collapse5">
											<i class="far fa-file-pdf"></i> Which license do I need?
										</h4>
									</div>

									<div id="collapse5" class="collapse show" data-parent="#tour-faq3">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title collapsed" data-toggle="collapse" data-target="#collapse6"
											aria-expanded="false" aria-controls="collapse6">
											<i class="fas fa-unlock-alt"></i> How do I get access to a App ?
										</h4>
									</div>
									<div id="collapse6" class="collapse" data-parent="#tour-faq3">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title collapsed" data-toggle="collapse" data-target="#collapse7"
											aria-expanded="false" aria-controls="collapse7">
											<i class="far fa-credit-card"></i> How do I see previous orders?
										</h4>
									</div>
									<div id="collapse7" class="collapse" data-parent="#tour-faq3">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
								<div class="single-accordion">
									<div class="accordion-header">
										<h4 class="title collapsed" data-toggle="collapse" data-target="#collapse8"
											aria-expanded="false" aria-controls="collapse8">
											<i class="fas fa-money-bill-wave"></i> it is refundable?
										</h4>
									</div>
									<div id="collapse8" class="collapse" data-parent="#tour-faq3">
										<div class="accordion-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
											richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
											dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
											tempor
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Faq Area End -->

		<!-- Contact Area Start -->
		<section class="contact">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10">
						<div class="section-heading">
							<h2 class="title">
								Feel Free To Ask
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="contact-form">
							<form>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">Name :</label>
											<input type="text" class="input-field" id="name"
												placeholder="Enter Your Name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="email">Email :</label>
											<input type="text" class="input-field" id="email"
												placeholder="Enter Your Email">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="subjict">Subjict :</label>
											<input type="text" class="input-field" id="subjict"
												placeholder="Write Your Subjict">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="phone">Phone :</label>
											<input type="text" class="input-field" id="phone"
												placeholder="Enter Your Phone No">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group button-area">
											<label for="message">Message :</label>
											<textarea id="message" class="input-field textarea"
												placeholder="Write Your Message"></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group button-area">
											<button type="submit" class="base-btn1">Send <i
													class="fas fa-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Area End -->
	</main>
	<!-- Main Area End -->

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
