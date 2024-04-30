@extends('frontend.master2')
@section('content')

    <!-- Main Content Start-->

    <div class="bg-page">
        <!-- Page Header Start -->
        <header class="page-banner-header blank-page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="blank-page-banner-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="page-banner-content text-center">
                                    <h3 class="page-banner-heading color-heading pb-15">Hey, {{ $student->first_name }} {{ $student->last_name }} <img
                                            src="{{ asset('frontend') }}/css/img/icons-svg/waving-hand.webp"
                                            alt="student" class="me-2"></h3>

                                    <!-- Breadcrumb Start-->
                                        <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item font-14"><a
                                                  class="text-decoration-none"  href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item font-14 active" aria-current="page">Activation Code
                                            </li>
                                        </ol>
                                    </nav>
                                    <!-- Breadcrumb End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Header End -->

        <!-- Student Profile Page Area Start -->
        <section class="student-profile-page">
            <div class="container">
                <div class="student-profile-page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="row bg-white">
                                <!-- Student Profile Left part -->
                                <div class="col-lg-3 p-0">
                                    @include('frontend.include.menu')
                                </div>
                                <!-- Student Profile Right part -->
                                <div class="col-lg-9 p-0">
                                    <br>
                                    @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <div class="student-profile-right-part">
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL</th>
                                                    <th scope="col">Activation Code</th>
                                                    <th scope="col">Activation Date</th>
                                                    <th scope="col">Status</th>
                                                    {{-- <th scope="col">Action</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activation_codes  as $key=>$activation_code )

                                                @php
                                                    $currentTime = now();
                                                    $activationCodeLifetime = 24 * 60 * 60; // 24 hours in seconds
                                                    $activationCodeGeneratedTime = $activation_code->activation_code_generated_at;
                                                    $timeDifference = $currentTime->diffInSeconds($activationCodeGeneratedTime);
                                                @endphp
                                                <tr>

                                                    <th scope="row">{{ $key+1 }}</th>
                                                    <td>{{ $activation_code->activation_code }}</td>
                                                    <td>{{ $activation_code->activation_code_generated_at }}</td>
                                                    <td>

                                                        @if($timeDifference <= $activationCodeLifetime)
                                                       <p style="color:green">Active</p>
                                                       @else
                                                       <p style="color:Red">Expired</p>

                                                        @endif

                                                    </td>
                                                    {{-- <td>
                                                        <a href="{{ route('delete-activation-code',$activation_code->id) }}" onclick="if(!confirm('Are You Sure?'))return false" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>

                                                    </td> --}}

                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Student Profile Page Area End -->
    </div>
    <!-- Main Content End-->

    @endsection
