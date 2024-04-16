
@extends('frontend.master')
@section('content')
<main>
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="title">
                        Deposit
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
                            <a href="deposit.html">Deposit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Pricing  Area Start -->
    <section class="pricing2">
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

    <!-- Start invest Area Start -->
    <section class="start-invest  bg-color1">
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
    <section class="start-invest">
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
</main>
<!-- Main Area End -->
@endsection
