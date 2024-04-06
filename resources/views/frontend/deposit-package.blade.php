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
                                            <li class="breadcrumb-item font-14 active" aria-current="page">PassBook
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
                                    <div class="student-profile-left-part">
                                        <input type="hidden" name="" id="balance" value="{{$student->bonus}}">
                                        <h6>{{ $student->first_name }} {{ $student->last_name }}</h6>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{route('deposit-packages')}}"
                                                   class="font-medium font-15 text-decoration-none active">Package
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('deposit.list')}}"
                                                   class="font-medium font-15 text-decoration-none active">Deposit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="font-medium font-15 text-decoration-none active">Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="font-medium font-15 text-decoration-none active">Training
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="font-medium font-15 text-decoration-none active">Blog
                                                </a>
                                            </li>
                                            <li><a href="{{ route('reference') }}"
                                                   class="font-medium font-15 text-decoration-none ">Reference</a></li>
                                            <li><a href="{{ route('passbook') }}"
                                                   class="font-medium font-15 text-decoration-none ">My Passbook</a></li>
                                            <li><a href="{{ route('withdraw') }}"
                                                   class="font-medium font-15 text-decoration-none ">Withdrawals</a></li>
                                            <li><a href="{{ route('password-change') }}"
                                                   class="font-medium font-15 text-decoration-none ">Change Password</a></li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('profile-settings') }}"
                                                    class="font-medium font-15 text-decoration-none ">Profile</a></li>
                                            <li><a href="{{ route('reference') }}"
                                                    class="font-medium font-15 text-decoration-none ">Reference</a></li>
                                            <li><a href="{{ route('passbook') }}"
                                                    class="font-medium font-15 text-decoration-none active">My Passbook</a></li>
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
                                        <h6>My Passbook</h6>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL</th>
                                                    <th scope="col">Deposit Package</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $items as $key=>$item )
                                                <tr>

                                                    <th scope="row">{{ $key+1 }}</th>
                                                    <th>{{ $item->package_name }}</th>
                                                    <td><span id="usa_amount{{$key}}">{{ $item->usa_amount }}</span>$</td>
                                                    <td>
                                                        <form action="{{route('deposit.add')}}" method="post" onsubmit="return checkBalance({{$key}})">
                                                            @csrf
                                                            <input type="hidden" name="package_id" value="{{$item->id}}">
                                                            <input type="hidden" name="amount" value="{{$item->usa_amount}}">
                                                            <button type="submit" class="btn btn-primary">Deposit</button>
                                                        </form>

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
@push('js')
    <script>
        function checkBalance(rowId) {

            var balance = Number($('#balance').val());
            var deposit_amount = Number($('#usa_amount'+rowId).val());
                if(balance > deposit_amount){
                    return true;
                }
                else{
                    alert('You Do not Have Sufficient Balance To Deposit. Please Add Balance to Your Wallet!!'  );
                    return false;
                }
        }



    </script>
@endpush