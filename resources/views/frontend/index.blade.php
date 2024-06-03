@extends('frontend.master')
@push('css')
    <link rel="stylesheet" href="{{asset('new-assets')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('new-assets')}}/assets/css/owl.theme.default.min.css">
@endpush
@section('content')

    <main>
        <!-- Hero Area Start -->
        <div class="hero-area" id="hero-area">
            <!-- The video -->
            <video autoplay muted loop id="myVideo">
                <source src="{{asset('new-assets')}}/assets/video/video.mp4" type="video/mp4">
            </video>

            <!-- Optional: some overlay text to describe the video -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content">
                            <div class="content">
                                <h1 class="title">
{{--                                    Develop Your Trading Skills With FX WWIITS--}}
                                </h1>
                                <p class="text">
{{--                                    Trade Cryptocurrencies, Stock Indices, Commodities and Forex from a single account--}}
                                </p>
{{--                                <div class="subscribe-area">--}}
{{--                                    <form action="#" class="subscribe-form">--}}
{{--                                        <input type="email" placeholder="Enter your email">--}}
{{--                                        <button type="submit" class="submit-btn">Start Trial</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="right-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width:100%; height:130px; margin-bottom: 80px;">
            <div class="bid-area bid-area-xs" style=" margin-bottom: 0px;">
                <!-- partial:index.partial.html -->
                <div class="marquee-container">
                    <div class="Marquee">
                        <div class="Marquee-content">


                            <div class="Marquee-tag">
                                <div class="single-bid style-two">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>EURUSD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.00                                                                                                                                                                                                                                                                                                                    </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             1.07                        </span>
                                            </div>
                                            <h4>61 <sup>1</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>1.07</span>
                                            </div>
                                            <h4>63 <sup>9</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-one">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>AUDUSD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.05                                                                                                                                                                                                                                                                                            </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             0.66                        </span>
                                            </div>
                                            <h4>09 <sup>5</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>0.66</span>
                                            </div>
                                            <h4>10 <sup>1</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-one">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>GBPUSD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.09                                                                                                                                                                                                                                                                    </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             1.25                        </span>
                                            </div>
                                            <h4>46 <sup>6</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>1.25</span>
                                            </div>
                                            <h4>47 <sup>6</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-one">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>USDJPY</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.41                                                                                                                                                                                                                                            </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             152.                        </span>
                                            </div>
                                            <h4>95 <sup>0</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>152.</span>
                                            </div>
                                            <h4>99 <sup>1</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-two">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>XAUUSD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.7                                                                                                                                                                                                                    </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             2302                        </span>
                                            </div>
                                            <h4>.0 <sup>0</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>2302</span>
                                            </div>
                                            <h4>.0 <sup>7</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-one">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>XAUAUD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                2.0                                                                                                                                                                                            </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             3481                        </span>
                                            </div>
                                            <h4>.5 <sup>3</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>3483</span>
                                            </div>
                                            <h4>.5 <sup>3</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-two">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>XAGUSD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.2                                                                                                                                                                    </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             26.                        </span>
                                            </div>
                                            <h4>4 <sup></sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>26.</span>
                                            </div>
                                            <h4>6 <sup></sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-one">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>XAGAUD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.1                                                                                                                                            </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             40.                        </span>
                                            </div>
                                            <h4>4 <sup></sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>40.</span>
                                            </div>
                                            <h4>2 <sup></sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-two">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>AUS200</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                1.3                                                                                                                    </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             7656                        </span>
                                            </div>
                                            <h4>.8 <sup>5</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>7658</span>
                                            </div>
                                            <h4>.1 <sup>5</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>



                            <div class="Marquee-tag">
                                <div class="single-bid style-one">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>UK100</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                1.1                                            </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             8233                        </span>
                                            </div>
                                            <h4>.6 <sup>0</sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>8234</span>
                                            </div>
                                            <h4>.7 <sup>0</sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>

                            <div class="Marquee-tag">
                                <div class="single-bid style-one">
                                    <ul class="bid-1">
                                        <li>
                                            <h3>XTIUSD</h3>
                                        </li>
                                        <li>
                                            <span>Spread</span>
                                            <h4>
                                                0.0                    </h4>
                                        </li>
                                    </ul>
                                    <ul class="bid-2">

                                        <li>
                                            <div class="bid-3">
                                                <span>Bid</span>
                                                <span>
                             77                        </span>
                                            </div>
                                            <h4> <sup></sup></h4>
                                        </li>


                                        <li>
                                            <div class="bid-3">
                                                <span>Ask</span>
                                                <span>77</span>
                                            </div>
                                            <h4> <sup></sup></h4>
                                        </li>


                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- partial -->
            </div>
        </div>

        <!-- Hero Area End -->

        <!-- Top Counter Start -->
        <section class="">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-counter">
                                <div class="icon">
                                    <i class="flaticon-community"></i>
                                </div>
                                <div class="content">
                                    <!-- <h4 class="title">
                                        73,234
                                    </h4> -->
                                    <h6 class="sub-title">
                                        Register Now
                                    </h6>
                                    <p>
                                        Open an account in just a few minutes
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-counter">
                                <div class="icon">
                                    <i class="flaticon-purse"></i>
                                </div>
                                <div class="content">
                                    <h6 class="sub-title">
                                        Learning
                                    </h6>
                                    <p>
                                        Get your skills better with FX WWIITS and training materials
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-counter">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="content">
                                    <h6 class="sub-title">
                                        Practice & Trade
                                    </h6>
                                    <p>
                                        Over 410 instruments for optimal trading
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Counter End -->

        <!-- About-area Start -->
        <section class="about-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title">
                                FX WWIITS
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-100">
                    <div class="col-lg-6 d-flex align-self-center">
                        <div class="image">
                            <img src="{{asset('new-assets')}}/assets/images/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="content">
                            <div class="top-heading">
                                <h4 class="title">
                                    Your Premium Choice For Trading Currencies & Stocks Online
                                </h4>
                            </div>
                            <ul class="about-list with-icon">
                                <li>
                                    <div class="feature-info">
                                        <div class="icon">
                                            <i class="flaticon-sticker"></i>
                                        </div>
                                        <div class="inner-content">
                                            <h4 class="title">
                                                Licensed & Certified
                                            </h4>
                                            <p>
                                                May moment. Ever a proposal, texts time, place end and heard assistant
                                                confidence instead designer
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-info">
                                        <div class="icon">
                                            <i class="flaticon-save-money"></i>
                                        </div>
                                        <div class="inner-content">
                                            <h4 class="title">
                                                Authentic Courses
                                            </h4>
                                            <p>
                                                May moment. Ever a proposal, texts time, place end and heard assistant
                                                confidence instead designer
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-info">
                                        <div class="icon">
                                            <i class="flaticon-user"></i>
                                        </div>
                                        <div class="inner-content">
                                            <h4 class="title">
                                                100% Effective Learning
                                            </h4>
                                            <p>
                                                May moment. Ever a proposal, texts time, place end and heard assistant
                                                confidence instead designer
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-area End -->

        <!-- Why Choose Us Start -->
        <section class="choose_us">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title extra-padding">
                                Why Choose us
                            </h2>
                            <p class="text">
                                Discover Why More Than 400,000 Traders Choose FX WWIITS
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav cu-menu" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-c1-tab" data-toggle="pill" href="#pills-c1"
                                   role="tab" aria-controls="pills-c1" aria-selected="true">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <h4 class="title">
                                        Broker
                                    </h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-c2-tab" data-toggle="pill" href="#pills-c2" role="tab"
                                   aria-controls="pills-c2" aria-selected="false">
                                    <div class="icon">
                                        <i class="flaticon-withdraw"></i>
                                    </div>
                                    <h4 class="title">
                                        Analysis
                                    </h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-c3-tab" data-toggle="pill" href="#pills-c3" role="tab"
                                   aria-controls="pills-c3" aria-selected="false">
                                    <div class="icon">
                                        <i class="flaticon-money-1"></i>
                                    </div>
                                    <h4 class="title">
                                        Award-Winning
                                    </h4>
                                </a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-c4-tab" data-toggle="pill" href="#pills-c4" role="tab"
                                   aria-controls="pills-c4" aria-selected="false">
                                    <div class="icon">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                    <h4 class="title">
                                        Smart Charts
                                    </h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-c5-tab" data-toggle="pill" href="#pills-c5" role="tab"
                                   aria-controls="pills-c4" aria-selected="false">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <h4 class="title">
                                        Advanced
                                    </h4>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content cu-content">
                            <div class="tab-pane fade show active" id="pills-c1" role="tabpanel"
                                 aria-labelledby="pills-c1-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="image">
                                            <img src="{{asset('new-assets')}}/assets/images/profit.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex align-self-center">
                                        <div class="content">
                                            <div class="heading">
                                                <h4 class="title">
                                                    Highly Regulated Broker
                                                </h4>
                                                <p class="text">
                                                    Unpacked reserved sir offering bed judgment may and quitting
                                                    speaking.
                                                    Is do be improved raptures offering required in replying raillery.
                                                    Stairs ladies friend by in mutual an no. Mr hence chief he cause.
                                                    Whole
                                                    no doors on hoped. Mile tell if help they ye full name.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-c2" role="tabpanel" aria-labelledby="pills-c2-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="image">
                                            <img src="{{asset('new-assets')}}/assets/images/withdraw.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex align-self-center">
                                        <div class="content">
                                            <div class="heading">
                                                <h4 class="title">
                                                    Daily Exclusive Market Analysis
                                                </h4>
                                                <p class="text">
                                                    Unpacked reserved sir offering bed judgment may and quitting
                                                    speaking.
                                                    Is do be improved raptures offering required in replying raillery.
                                                    Stairs ladies friend by in mutual an no. Mr hence chief he cause.
                                                    Whole
                                                    no doors on hoped. Mile tell if help they ye full name.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-c3" role="tabpanel" aria-labelledby="pills-c3-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="image">
                                            <img src="{{asset('new-assets')}}/assets/images/currency.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex align-self-center">
                                        <div class="content">
                                            <div class="heading">
                                                <h4 class="title">
                                                    Multiple Award-Winning Broker
                                                </h4>
                                                <p class="text">
                                                    Unpacked reserved sir offering bed judgment may and quitting
                                                    speaking.
                                                    Is do be improved raptures offering required in replying raillery.
                                                    Stairs ladies friend by in mutual an no. Mr hence chief he cause.
                                                    Whole
                                                    no doors on hoped. Mile tell if help they ye full name.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-c4" role="tabpanel" aria-labelledby="pills-c4-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="image">
                                            <img src="{{asset('new-assets')}}/assets/images/support.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex align-self-center">
                                        <div class="content">
                                            <div class="heading">
                                                <h4 class="title">
                                                    Smart Charts, Webinars, and Tutorials for all levels
                                                </h4>
                                                <p class="text">
                                                    Unpacked reserved sir offering bed judgment may and quitting
                                                    speaking.
                                                    Is do be improved raptures offering required in replying raillery.
                                                    Stairs ladies friend by in mutual an no. Mr hence chief he cause.
                                                    Whole
                                                    no doors on hoped. Mile tell if help they ye full name.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-c5" role="tabpanel" aria-labelledby="pills-c5-tab">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="image">
                                            <img src="{{asset('new-assets')}}/assets/images/support.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7 d-flex align-self-center">
                                        <div class="content">
                                            <div class="heading">
                                                <h4 class="title">
                                                    FREE Advanced Trading Tools
                                                </h4>
                                                <p class="text">
                                                    Unpacked reserved sir offering bed judgment may and quitting
                                                    speaking.
                                                    Is do be improved raptures offering required in replying raillery.
                                                    Stairs ladies friend by in mutual an no. Mr hence chief he cause.
                                                    Whole
                                                    no doors on hoped. Mile tell if help they ye full name.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us End -->

        <!-- Get Start Area Start -->
        <section class="ger-start-secrion">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="title">
                            Learn Forex Trading With Effective Learning Tools & Methods From FX WWIITS
                        </h2>
                    </div>
                    <div class="col-lg-4 d-flex align-self-center">
                        <div class="right-links">
                            <a href="{{ route('student.signup') }}" class="base-btn2">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get Start Area End -->

        <!-- Blog Area Start -->
        <section class="blog-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title  extra-padding">
                                Popular lessons
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-slider">
                            <div class="slider-item">
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
                                        <a href="#">
                                            <h4 class="title">
                                                Introduction To Financial Markets
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
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
                                        <a href="#">
                                            <h4 class="title">
                                                How to Create a Forex Trading Plan
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
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
                                        <a href="#">
                                            <h4 class="title">
                                                Understanding Technical Analysis
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="single-blog">
                                    <div class="img">
                                        <img src="{{asset('new-assets')}}/assets/images/blog/img4.png" alt="">
                                    </div>
                                    <div class="content">
                                        <ul class="top-meta">
                                            <li>
                                                <p class="date">
                                                    24 Aug, 2019
                                                </p>
                                            </li>
                                            <li>
                                                <p class="post-by">
                                                    By, Admin
                                                </p>
                                            </li>
                                        </ul>
                                        <a href="#">
                                            <h4 class="title">
                                                Fibonacci Theory
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->

        <!-- Pricing  Area Start -->
        <section class="pricing2" style="display:none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title">
                                Deposit Plans
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pricing-tab">
                        <div class="tab-menu">
                            <ul class="nav" id="my-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-daly-tab" data-toggle="pill" href="#pills-daly"
                                       role="tab" aria-controls="pills-daly" aria-selected="true">Daly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-weekly-tab" data-toggle="pill" href="#pills-weekly"
                                       role="tab" aria-controls="pills-weekly" aria-selected="false">Weekly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly"
                                       role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-yearly-tab" data-toggle="pill" href="#pills-yearly"
                                       role="tab" aria-controls="pills-yearly" aria-selected="false">Yearly</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-daly" role="tabpanel"
                                 aria-labelledby="pills-daly-tab">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 10 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">100%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $100</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $1000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 20 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">200%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $200</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $2000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 30 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">300%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $300</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $3000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-weekly" role="tabpanel"
                                 aria-labelledby="pills-weekly-tab">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 10 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">200%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $100</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $1000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 20 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">400%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $200</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $2000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 30 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">500%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $300</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $3000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-monthly" role="tabpanel"
                                 aria-labelledby="pills-monthly-tab">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 10 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">100%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $100</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $1000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 20 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">200%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $200</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $2000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 30 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">300%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $300</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $3000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel"
                                 aria-labelledby="pills-yearly-tab">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 10 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">200%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $100</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $1000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 20 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">400%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $200</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $2000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">After 30 days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">500%</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Minimam Invest : $300</p>
                                                    </li>
                                                    <li>
                                                        <p>Maximam Invest : $3000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="#">Deposit<i
                                                        class="fas fa-dollar-sign"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Area End -->

        <!-- How It Work Start -->
        <section class="how-it-work">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading text-white">
                            <h2 class="title">
                                How does it works
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-how-it-work">
                            <div class="icon">
                                <i class="flaticon-user-2"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Create Account
                                </h4>
                                <p>
                                    Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                    contracting
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-how-it-work">
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Start Learning
                                </h4>
                                <p>
                                    Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                    contracting
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-how-it-work">
                            <div class="icon">
                                <i class="flaticon-megaphone"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Grow Career
                                </h4>
                                <p>
                                    Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                    contracting
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Work End -->

        <!-- Start invest Area Start -->
        <section class="start-invest d-none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title">
                                Start Deposit
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-menu-area">
                            <ul class="nav nav-lend mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-all-tabthree-tab" data-toggle="pill"
                                       href="#pills-all-tabthree" role="tab" aria-controls="pills-all-tabthree"
                                       aria-selected="true">All Bets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-my-tabfour-tab" data-toggle="pill"
                                       href="#pills-my-tabfour" role="tab" aria-controls="pills-my-tabfour"
                                       aria-selected="false">My Bets</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-all-tabthree" role="tabpanel"
                                 aria-labelledby="pills-all-tabthree-tab">
                                <div class="responsive-table">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">USER</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">AMOUNT</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p5.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p6.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-my-tabfour" role="tabpanel"
                                 aria-labelledby="pills-my-tabfour-tab">
                                <div class="responsive-table">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">USER</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">AMOUNT</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p5.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p6.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start invest Area End -->

        <!-- Start invest Area Start -->
        <section class="start-invest d-none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title">
                                Latest Transaction
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-menu-area">
                            <ul class="nav nav-lend mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-all-tabone-tab" data-toggle="pill"
                                       href="#pills-all-tabone" role="tab" aria-controls="pills-all-tabone"
                                       aria-selected="true">Daly</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-my-tabtwo-tab" data-toggle="pill"
                                       href="#pills-my-tabtwo" role="tab" aria-controls="pills-my-tabtwo"
                                       aria-selected="false">Monthly</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-all-tabone" role="tabpanel"
                                 aria-labelledby="pills-all-tabone-tab">
                                <div class="responsive-table">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Deposit By</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p1.png" alt="">
                                                Jim Adams
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p2.png" alt="">

                                                Willie Barton
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p3.png" alt="">
                                                Kim Mccoy
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">

                                                Sheryl Tran
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p5.png" alt="">

                                                Toby Davis
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p6.png" alt="">
                                                Glenn lue
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">

                                                Isreal Vandy
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-my-tabtwo" role="tabpanel"
                                 aria-labelledby="pills-my-tabtwo-tab">
                                <div class="responsive-table">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Deposit By</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p1.png" alt="">
                                                Jim Adams
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p2.png" alt="">

                                                Willie Barton
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p3.png" alt="">
                                                Kim Mccoy
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">

                                                Sheryl Tran
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p5.png" alt="">

                                                Toby Davis
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p6.png" alt="">
                                                Glenn lue
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{asset('new-assets')}}/assets/images/people/p4.png" alt="">

                                                Isreal Vandy
                                            </td>
                                            <td>
                                                $21.45
                                            </td>
                                            <td>
                                                130% <i class="fas fa-arrow-up"></i>
                                            </td>
                                            <td>576</td>
                                            <td>
                                                Bitcoin
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start invest Area End -->

        <!-- Team Area Start -->
        <section class="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title  extra-padding">
                                Know your Trading Objectives
                            </h2>
                            <p class="text">
                                Before we allow you to trade with us, we need to be sure that you can manage risk. For this reason, we developed Trading Objectives. By meeting the Trading Objectives, you prove that you are a disciplined and experienced trader
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-3">
                            <div class="">
                                <div class="">
                                    <div class="img">
                                        <img src="{{asset('frontend')}}/images/trading-objective.png" alt="">
                                    </div>
{{--                                    <div class="content">--}}
{{--                                        <h4 class="name">--}}
{{--                                            Jameson--}}
{{--                                        </h4>--}}
{{--                                        <p class="designation">--}}
{{--                                            $54,4894,974--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                    </div>
                        <div class="col-lg-12 text-center">
                            <a href="https://ftmo.com/en/" target="_blank" class="btn text-white mt-2" style="background: #95cd41">Know More</a>
                        </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Team Area End -->

        <!-- Testimonial Start -->
        <section class="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading text-white">
                            <h2 class="title  extra-padding">
                                What Traders Say
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider">
                            <div class="slider-item">
                                <div class="single-review">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Believed attentive assisted picture sharpness to I to she waved the are and
                                            slide understand the that set task. The you due back
                                        </p>
                                    </div>
                                    <div class="reviewr">
                                        <div class="img">
                                            <img src="{{asset('new-assets')}}/assets/images/reviewr/p1.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="name">
                                                Austin Bishop
                                            </h4>
                                            <p>
                                                CEO at ABC
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="single-review">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Believed attentive assisted picture sharpness to I to she waved the are and
                                            slide understand the that set task. The you due back
                                        </p>
                                    </div>
                                    <div class="reviewr">
                                        <div class="img">
                                            <img src="{{asset('new-assets')}}/assets/images/reviewr/p2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="name">
                                                Alexander
                                            </h4>
                                            <p>
                                                CEO at DER
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="single-review">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Believed attentive assisted picture sharpness to I to she waved the are and
                                            slide understand the that set task. The you due back
                                        </p>
                                    </div>
                                    <div class="reviewr">
                                        <div class="img">
                                            <img src="{{asset('new-assets')}}/assets/images/reviewr/p3.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="name">
                                                Sebastian
                                            </h4>
                                            <p>
                                                CEO at ECS
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="single-review">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Believed attentive assisted picture sharpness to I to she waved the are and
                                            slide understand the that set task. The you due back
                                        </p>
                                    </div>
                                    <div class="reviewr">
                                        <div class="img">
                                            <img src="{{asset('new-assets')}}/assets/images/reviewr/p4.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h4 class="name">
                                                Christopher
                                            </h4>
                                            <p>
                                                CEO at XYZ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Tax Calculator Area Start -->
        <section class="tax-calculator d-none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title">
                                Tax & Profit Calculator
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
                        <div class="box-calculator">
                            <h4 class="calculator-title">Tax Calculator</h4>
                            <div class="calculate-wrappwr">
                                <form action="#">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Your business Area :</label>
                                                <select class="input-field" name="hous">
                                                    <option value="retail">Retail</option>
                                                    <option value="all">All</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Your Country :</label>
                                                <select class="input-field" name="hous">
                                                    <option value="usa">USA</option>
                                                    <option value="all">All</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Employees Number :</label>
                                                <select class="input-field" name="hous">
                                                    <option value="usa">1-7</option>
                                                    <option value="all">1-15</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Yearly Income:</label>
                                                <input type="text" class="input-field" placeholder="$50000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Total Pryment</label>
                                                <input type="text" class="input-field" placeholder="$00">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-calculator box-calculator2">
                            <h4 class="calculator-title">Profit Calculator</h4>
                            <div class="calculate-wrappwr">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Enter Amount:</label>
                                                <input type="text" class="input-field" placeholder="$100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Total Profit:</label>
                                                <input type="text" class="input-field" placeholder="$150">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Net Profit:</label>
                                                <input type="text" class="input-field" placeholder="$50">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tax Calculator Area End -->

        <!-- Faq Area Start -->
        <section class="faq-area d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-self-center">
                        <div class="section-heading">
                            <h2 class="title  extra-paddin">
                                Frequently Asked <br>
                                Qestions
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                            <a href="#" class="base-btn1">
                                Ask Anything
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content">
                            <div class="accordion" id="tour-faq">
                                <div class="single-accordion">
                                    <div class="accordion-header">
                                        <h4 class="title" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            <i class="far fa-file-pdf"></i> Which license do I need?
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" data-parent="#tour-faq">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
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
                                    <div id="collapseTwo" class="collapse" data-parent="#tour-faq">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
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
                                    <div id="collapseThree" class="collapse" data-parent="#tour-faq">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
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
                                    <div id="collapseFour" class="collapse" data-parent="#tour-faq">
                                        <div class="accordion-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
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

        <!-- Our Advantage Area Start -->
        <section class="our-advantage">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <h2 class="title  extra-padding">
                                Our Bigest Advantage
                            </h2>
                            <p class="text">
                                We use the latest technologies and tools in order to create a better code that not only
                                works great, but it is easy easy to work with too.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="content">
                            <h4 class="title">
                                We are Offering 100% Guarantee.
                            </h4>
                            <p>
                                Consequuntur similique illum magni! Officiis minima voluptates, similique inventore
                                accusamus veritatis earum nostrum.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium temporibus, ad
                                maxime
                                animi aspernatur enim inventore nostrum ipsa, consequuntur similique illum magni!
                                Officiis
                                minima voluptates, similique inventore accusamus veritatis earum?
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="{{asset('new-assets')}}/assets/images/advantage.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Our Advantage Area End -->
    </main>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
@endsection

