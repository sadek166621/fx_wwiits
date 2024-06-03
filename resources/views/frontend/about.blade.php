@extends('frontend.master')
@section('content')
<main>
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="title">
                        About
                    </h4>
                    <ul class="breadcrumb-list">
                        <li>
                            <a href="{{route('home')}}">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span><i class="fas fa-chevron-right"></i> </span>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- About-area Start -->
    <section class="about-area about-page">
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
                                            Saving & Deposits
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
                                            100% Secure Deposits
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
</main>
<!-- Main Area End -->
@endsection
