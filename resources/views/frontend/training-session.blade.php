@extends('frontend.master2')
@section('content')

    <div class="row">
        <div class="col-lg-12">
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
                <h2 style="text-align: center; color:#ffcf40;font-weight: bold;">Training Sessions Will Be Coming Soon</h2>
                {{-- <form action="{{ route('submit-balance-tranfer') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-30">
                            <label class="font-medium font-15 color-heading">Transfer Type</label>
                            <select name="transfer_type" id="transfer_type" class="form-control">
                                <option >Select Option</option>
                                <option value="my_wallet">My Wallet</option>
                                <option value="others_transfer">Others Transfer</option>
                            </select>
                        </div>
                    </div>

                    <!-- Additional fields for My Wallet -->
                    <div id="my_wallet_fields" style="display: none;">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="font-medium font-15 color-heading">Select Options</label>
                            </div>
                            <div class="col-md-4 mb-30">
                                <input type="checkbox" name="profit" id="option1">
                                <label for="option1">Profit</label>
                            </div>
                            <div class="col-md-4 mb-30">
                                <input type="checkbox" name="affiliate_balance" id="option2">
                                <label for="option2">Affiliate Balance	</label>
                            </div>
                            <div class="col-md-4 mb-30">
                                <input type="checkbox" name="internal_transfer" id="option3">
                                <label for="option3">Internal Transfer </label>
                            </div>
                        </div>
                    </div>

                    <!-- Additional fields for Others Transfer -->
                    <div id="others_transfer_fields" style="display: none;">
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <label class="font-medium font-15 color-heading">Member ID</label>
                                <input type="number" name="member_id" class="form-control" placeholder="Member ID">
                            </div>
                            <div class="col-md-6 mb-30">
                                <label class="font-medium font-15 color-heading">Amount</label>
                                <input type="number" name="amount" class="form-control" placeholder="Amount">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="theme-btn theme-button1 theme-button3 font-15 fw-bold">Submit</button>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>

    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#transfer_type').change(function() {
                var selectedOption = $(this).val();

                // Hide all additional fields
                $('#my_wallet_fields, #others_transfer_fields').hide();

                // Show additional fields based on selected option
                if (selectedOption == 'my_wallet') {
                    $('#my_wallet_fields').show();
                } else if (selectedOption == 'others_transfer') {
                    $('#others_transfer_fields').show();
                }
            });
        });
    </script>

