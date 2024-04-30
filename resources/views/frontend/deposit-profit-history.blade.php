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
                                            <li class="breadcrumb-item font-14 active" aria-current="page">Profit History (days)
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
                                    <div class="student-profile-right-part">
                                        <h6>Profit History (Day)</h6>
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Previous Amount</th>
                                                    {{-- <th scope="col">Deposit Amount</th> --}}
                                                    <th scope="col">Withdraw Amount</th>
                                                    <th scope="col">Profit</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $j = 1;
                                                    $prev_amount = $deposit->package->usa_amount;
                                                @endphp
                                                @php
                                                $totalProfit = 0; // Initialize total profit variable outside the loop
                                                @endphp

                                                @for ($i = $deposit->created_at; $i <= date('Y-m-d'); $i->addDays(1))
                                                    @if ($prev_amount == 0)
                                                        @php
                                                            break;
                                                        @endphp
                                                    @endif

                                                    <tr>
                                                        <td>{{ $j }}</td>
                                                        <td>{{ date('Y-m-d', strtotime($i)) }}</td>
                                                        <td>{{ $prev_amount }}</td>
                                                        @php
                                                            $withdraw_request = findWithdrawRequest(date('Y-m-d', strtotime($i)));
                                                            $profit = ($prev_amount * $deposit->package->profit_rate) / 100;
                                                            if ($withdraw_request) {
                                                                $prev_amount -= $withdraw_request->amount;
                                                            }
                                                            $withdraw = 0;
                                                            $return_withdraw = 0;
                                                            $totalProfit += $profit; // Add profit to total profit
                                                        @endphp

                                                        <td>
                                                            @if ($withdraw_request != null && $withdraw_request->status == 1)
                                                                {{ $withdraw = $withdraw_request->amount }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $profit }}</td>
                                                    </tr>
                                                    @php
                                                        $j++;
                                                    @endphp
                                                @endfor

                                                <!-- Display the total profit amount after the loop -->
                                                <tr>
                                                    <td colspan="4"><strong>Total Profit:</strong></td>
                                                    <td><strong>{{ $totalProfit }}</strong></td>
                                                </tr>

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
    {{-- <script>
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



    </script> --}}
@endpush
