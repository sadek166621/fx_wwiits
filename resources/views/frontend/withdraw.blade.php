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
                                <h3 class="page-banner-heading color-heading pb-15">Hey,{{ $student->first_name }}
                                    {{ $student->last_name }} <img
                                        src="{{ asset('frontend') }}/css/img/icons-svg/waving-hand.webp" alt="student"
                                        class="me-2"></h3>

                                <!-- Breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item font-14"><a class="text-decoration-none"
                                                href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item font-14 active" aria-current="page">Withdrawal
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
                                    {{-- <div class="my-4">
                                            <h6>Withdrawal </h6>

                                            {{-- <div>
                                                <p>Your account is not eligible for withdrawal</p>
                                                <p>Note: Your balance isn&quot;t greater than 55</p>
                                            </div>
                                        </div> --}}

                                    <div class="row">
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
                                <form action="{{ route('submit-package-withdraw-request') }}" method="Post">
                                            @csrf
                                            <div class="col-md-12 mb-30">
                                                <label class="font-medium font-15 color-heading">Select Options</label>
                                                <select name="withdraw_type" id="withdraw_type" required
                                                    class="form-control">
                                                    <option>Select Option</option>
                                                    <option value="1">Deposit Packages</option>
                                                    <option value="2">My Wallet</option>
                                                    {{-- @foreach ($packages as $package )
                                                    <option value="{{ $package->package_id }}">{{ $package->package->package_name }}
                                                    </option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4 withdraw1" style="display: none">
                                            <label class="font-medium font-15 color-heading">Select Package</label>
                                            <select name="packageId" class="form-control" id="packageSelect">
                                                <option value="">Select package</option>
                                                @foreach ($packages as $key => $item)
                                                <option value="{{ $item->package->id }}"
                                                    data-terms="{{ $item->package->terms }}">
                                                    {{ $item->package->package_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="modal fade" id="packageModal" tabindex="-1" role="dialog"
                                            aria-labelledby="packageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="packageModalLabel">Terms And
                                                            Conditions</h5>
                                                        <button type="button" class="close" data-bs-toggle="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <textarea type="text" class="form-control" id="packageTerms"
                                                                readonly></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="withdraw_option"
                                            value="{{ $student->withdraw_option }}">
                                        <input type="hidden" name="accounts_number"
                                            value="{{ $student->account_number }}">
                                        <input type="hidden" name="member_id" value="{{ $student->id }}">
                                        <div class="col-md-4 withdraw" style="display: none">
                                            <label class="font-medium font-15 color-heading">amount</label>
                                            <input type="text" name="amount" class="form-control" required
                                                placeholder="Amount">
                                        </div>
                                        <div class="col-md-2 withdraw " style="display: none">
                                            <label class="font-medium font-15 color-heading "
                                                style="color: white">Country</label>
                                            <button class="form-control btn btn-primary ">Submit</button>
                                        </div>

                                    </div>



                                </form>

                                    <div class="my-4">
                                        <h6 class="my-2">My Withdrawal Requests</h6>
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL</th>
                                                    <th scope="col">Withdraw From</th>
                                                    <th scope="col">Withdraw Option</th>
                                                    <th scope="col">Account Number</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Request Date</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($withdraws as $key=> $withdraw)
                                                <tr>
                                                    <th scope="row">{{ $key+1 }}</th>
                                                    @if ($withdraw->withdraw_type == 1)
                                                    <th>Package :{{ $withdraw->package->package_name }} </th>
                                                    @else
                                                    <th> My Wallet</th>
                                                    @endif
                                                    <th>{{ $withdraw->withdraw_option }}</th>
                                                    <th>{{ $withdraw->account_number }}</th>
                                                    <th>${{ $withdraw->amount }}</th>
                                                    <th>{{ $withdraw->created_at }}</th>
                                                    <th>
                                                        @if ($withdraw->status == 1)
                                                        <p style="color: green">Success</p>
                                                        @else
                                                        <p style="color: Red">Pending</p>
                                                        @endif
                                                    </th>

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
        </div>
    </section>
    <!-- Student Profile Page Area End -->
</div>
<!-- Main Content End-->

@endsection
@push('js')
<script>
    document.getElementById("packageSelect").addEventListener("change", function () {
        var selectedOption = this.options[this.selectedIndex];
        var packageTerms = selectedOption.getAttribute('data-terms');
        console.log(packageTerms);
        document.getElementById("packageTerms").value = packageTerms;

        $('#packageModal').modal('show');
    });

</script>

<script>
    $('#withdraw_type').change(function () {
        $('.withdraw').show();
        var selectedValue = $(this).val();
        if (selectedValue == '1') {
            $('.withdraw1').show();
        }
        if (selectedValue == '2') {

            $('.withdraw1').hide();
        }

    });

</script>

{{-- <script>
    $(document).ready(function() {
        $('#packageSelect').change(function() {
            var selectedPackageTerms = $(this).find('option:selected').data('terms');
            alert("Selected Package Terms:", selectedPackageTerms); // Debugging line
            $('#packageTerms').text(selectedPackageTerms);
            $('#packageModal').modal('show');
        });
    });
</script> --}}

@endpush
