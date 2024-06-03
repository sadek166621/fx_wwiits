@extends('frontend.master')
@section('content')
    <main>
        <!-- Breadcrumb Area Start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="title">
                            Training
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
                                <a href="{{route('training')}}">Training</a>
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
                                Training Sessions Will Be Coming Soon
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @endsection


