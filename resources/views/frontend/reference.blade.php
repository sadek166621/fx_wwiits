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
                                                    href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item font-14 active" aria-current="page">Profile</li>
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
                                    <div class="student-profile-left-part">

                                        <h6>{{ $student->first_name }} {{ $student->last_name }}</h6>
                                        <p class="px-5 py-4">You're a Student </p>
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('profile-settings') }}"
                                                    class="font-medium font-15 text-decoration-none ">Profile</a></li>
                                            <li><a href="{{ route('reference') }}"
                                                    class="font-medium font-15 text-decoration-none active">Reference</a></li>
                                            <li><a href="{{ route('passbook') }}"
                                                    class="font-medium font-15 text-decoration-none ">My Passbook</a></li>
                                            <li><a href="{{ route('withdraw') }}"
                                                    class="font-medium font-15 text-decoration-none ">Withdrawals</a></li>
                                            <li><a href="{{ route('password-change') }}"
                                                    class="font-medium font-15 text-decoration-none ">Change Password</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Student Profile Right part -->
                                <div class="col-lg-9 p-0">
                                    <div class="student-profile-right-part">
                                        <h6>My Referral Code</h6>
                                        <h4 class="mb-5"><strong>{{ $student->refer_code }}</strong></h4>
                                        <div class="my-4">
                                            <div class="my-4">
                                                Total Leads: {{ $lead }} <br>
                                                Today Leads: {{ $todayLeadsCount }} <br>
                                            </div>


                                        </div>
                                        <h6>My Reference</h6>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr.No</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Student ID</th>
                                                    <th scope="col">Joining Date</th>
                                                    <th scope="col">Whatsapp</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($references  as $key=>$reference )
                                                <tr>

                                                    <th scope="row">{{ $key+1 }}</th>
                                                    <td>{{ $reference->first_name }}</td>
                                                    <td>{{ $reference->refer_code }}</td>
                                                    <td>{{ $reference->created_at}}</td>
                                                    <td>
                                                        <a class="theme-btn bg-black text-white border-white"
                                                            href="https://api.whatsapp.com/send/?phone={{ $reference->whatsapp_number}}"
                                                            target="_blank">Whatsapp</a>
                                                    </td>


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
