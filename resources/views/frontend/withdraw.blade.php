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
                                    <h3 class="page-banner-heading color-heading pb-15">Hey,{{ $student->first_name }} {{ $student->last_name }} <img
                                            src="{{ asset('frontend') }}/css/img/icons-svg/waving-hand.webp"
                                            alt="student" class="me-2"></h3>

                                    <!-- Breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item font-14"><a
                                                   class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
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
                                    <div class="student-profile-left-part">

                                        <h6>{{ $student->first_name }} {{ $student->last_name }}</h6>
                                        <p class="px-5 py-4">You're a Student </p>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{route('deposit-packages')}}"
                                                    class="font-medium font-15 text-decoration-none ">Package
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('deposit.list')}}"
                                                    class="font-medium font-15 text-decoration-none ">Deposit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('profile-settings') }}"
                                                    class="font-medium font-15 text-decoration-none ">Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="font-medium font-15 text-decoration-none ">Training
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="font-medium font-15 text-decoration-none ">Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('used-activation-code') }}"
                                                    class="font-medium font-15 text-decoration-none ">Used Activation Code
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('balance-transfer') }}"
                                                    class="font-medium font-15 text-decoration-none "> Balance Transfer
                                                </a>
                                            </li>
                                            <li><a href="{{ route('reference') }}"
                                                    class="font-medium font-15 text-decoration-none ">Reference</a></li>
                                            <li><a href="{{ route('passbook') }}"
                                                    class="font-medium font-15 text-decoration-none ">My Passbook</a></li>
                                            <li><a href="{{ route('withdraw') }}"
                                                    class="font-medium font-15 text-decoration-none active ">Withdrawals</a></li>
                                            <li><a href="{{ route('password-change') }}"
                                                    class="font-medium font-15 text-decoration-none ">Change Password</a></li>
                                        </ul>
                                    </div>
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
                                            <div class="col-md-12 mb-30">
                                                <label class="font-medium font-15 color-heading">Select Your Package</label>
                                                <select name="transfer_type" id="transfer_type" class="form-control">
                                                    <option >Select Option</option>
                                                    @foreach ($packages as $package )
                                                    <option value="{{ $package->package_id }}">{{ $package->package->package_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="packageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="packageModalLabel">Withdraw Request</h5>
                                                        <button type="button" class="close" data-bs-toggle="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="packageForm" action="{{ route('submit-package-withdraw-request') }}" method="Post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="hidden" id="packageId" name="packageId">
                                                                <input type="hidden" name="withdraw_option" value="{{ $student->withdraw_option }}">
                                                                <input type="hidden" name="accounts_number" value="{{ $student->account_number }}">
                                                                <input type="hidden" name="member_id" value="{{ $student->id }}">
                                                                <label for="packageName">Package Name:</label>
                                                                <input type="text" class="form-control" id="packageName" name="packageName" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="staticAmount">Amount:</label>
                                                                <input type="text" name="amount" class="form-control" >
                                                            </div>

                                                            <!-- Submit button -->
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-4">
                                            <h6 class="my-2">My Withdrawal Requests</h6>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Sr.No</th>
                                                        <th scope="col">Request Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Note</th>
                                                        <th scope="col">Admin Note</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        {{-- <th scope="row">1</th>
                                                        <th>2023-10-19 10:21:11</th>
                                                        <th>300.00</th>
                                                        <td>Phone:01768660094</td>
                                                        <td>withdrowal succes</td>
                                                        <td> Complete </td> --}}
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
            </div>
        </section>
        <!-- Student Profile Page Area End -->
    </div>
    <!-- Main Content End-->

    @endsection
    @push('js')
    <script>
        // When the user selects an option, open the modal and set the package name and ID
        document.getElementById("transfer_type").addEventListener("change", function() {
            // Get the selected option
            var selectedOption = this.options[this.selectedIndex];

            // Get the package name and ID from the selected option
            var packageName = selectedOption.text;
            var packageId = selectedOption.value;

            // Set the package name and ID values in the input fields inside the modal
            document.getElementById("packageName").value = packageName;
            document.getElementById("packageId").value = packageId;

            // Open the modal
            $('#packageModal').modal('show');
        });
        // Reset modal content when modal is hidden
        // $('#packageModal').on('hidden.bs.modal', function () {
        //     // Reset the form fields
        //     $('#packageForm')[0].reset();
        // });
    </script>

    @endpush
