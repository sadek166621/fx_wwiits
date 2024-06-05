@extends('frontend.master2')
@section('content')
    @php
        $setting = getSetting();
    //    dd($setting->rocket);
    @endphp
    <div class="row">
        <div class="col-xl-3 col-md-6 col-6">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-700 mt-0">${{ $student->bonus }}</h3>
                    </div>
                    <h5 class="text-primary" style="letter-spacing: 0.5px">My Wallet Balance</h5>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-6">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-700 mt-0">${{ $student->profit }}</h3>
                    </div>
                    <h5 class="text-primary" style="letter-spacing: 0.5px">Overall Profit</h5>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-6">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-700 mt-0">${{ $student->affiliate_balance }}</h3>
                    </div>
                    <h5 class="text-primary" style="letter-spacing: 0.5px">Affiliate Balance</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-6">
            <div class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="fw-700 mt-0">${{ $student->tranfer_balance }}</h3>
                    </div>
                    <h5 class="text-primary" style="letter-spacing: 0.5px">Internal Transfer</h5>

                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-body">
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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- <div class="my-4">
                    <h6>Withdrawal </h6>

                    {{-- <div>
                        <p>Your account is not eligible for withdrawal</p>
                        <p>Note: Your balance isn&quot;t greater than 55</p>
                    </div>
                </div> --}}
            <form action="{{ route('submit-package-withdraw-request') }}" onsubmit="return checkValue()" method="Post">
                <div class="row">
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
                <input type="hidden" name="" id="total_package" value="{{count($packages)}}">
                <div class="row">
                    <div class="col-md-6 withdraw1" style="display: none">
                        <label class="font-medium font-15 color-heading">Select Package</label>
                        <select name="packageId" class="form-control" id="packageSelect">
                            <option value="">Select package</option>
                            @foreach ($packages as $key => $item)
                                <option value="{{ $item->id }}"
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
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
                    <input type="hidden" id="withdraw_option" name="withdraw_option"
                           value="">
{{--                    <input type="hidden" name="accounts_number"--}}
{{--                           value="{{ $student->account_number }}">--}}
                    <input type="hidden" name="member_id" value="{{ $student->id }}">
                    <div class="col-md-6 withdraw_amount" style="display: none">
                        <label class="font-medium font-15 color-heading">amount</label>
                        <input type="text" name="amount" id="amount" class="form-control"
                               placeholder="Amount">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 withdraw" style="display: none">
                        <label for=""  class="font-medium font-15 color-heading">Withdrawal Method</label>
                        <div class="row">
                            <div class="col-md-5">
                                <ul style="list-style: none; display: flex; padding-left: 0">
                                    <li class="m-3" id="visa_card" onclick="setPayment('visa_card')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/visa card.png" height="50px" width="110px" alt=""></li>
                                    <li class="m-3" id="binance" onclick="setPayment('binance')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/binance.png" height="50px" width="110px" alt=""></li>
                                    <li class="m-3" id="skrill" onclick="setPayment('skrill')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/skrill.png" height="50px" width="110px" alt=""></li>
                                    <li class="m-3" id="perfect_money" onclick="setPayment('perfect_money')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/perfectmoney.png" height="50px" width="110px" alt=""></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul style="list-style: none; display: flex; padding-left: 0">
                                    <li class="m-3" id="neteller" onclick="setPayment('neteller')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/neteller.jpg" height="50px" width="110px" alt=""></li>
                                    <li class="m-3" id="bkash" onclick="setPayment('bkash')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/bkash.png" height="50px" width="110px" alt=""></li>
                                    <li class="m-3" id="nagad" onclick="setPayment('nagad')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/nagad.png" height="50px" width="110px" alt=""></li>
                                    <li class="m-3" id="nagad" onclick="setPayment('rocket')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/rocket.png" height="50px" width="110px" alt=""></li>
                                </ul>
                            </div>
                            <div class="col-md-1">
                                <ul style="list-style: none; display: flex; padding-left: 0">
                                    <li class="m-3" id="visa_card" onclick="setPayment('bank')" data-bs-toggle="modal" data-bs-target="#withdrawModal"><img src="{{asset('frontend')}}/payment-method/bank.jpg" height="50px" width="70px" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog"
                         aria-labelledby="packageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="packageModalLabel">Withdrawal Deposit</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3"></div>
                                    <div class="payment-fields" >
                                        <h5 class="text-center" id="withdrawal_text" style="display: none">You Will Get  <span id="withdrawal_amount"></span>
                                            TK After Withdrawal</h5>
                                        <input type="hidden" id="payment_method" name="payment_method" value="">
                                        <div class="mb-3" id="bank_option" style="display: none">
                                            <label for="recipient-name" id="credential_title" class="col-form-label">Bank <span class="text-danger">*</span></label>
                                            <select name="bank_id" id="bankSelect" class="form-control">
                                                <option value="">Select Bank</option>
                                                @foreach($banks as $bank)
                                                    <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div id="credential">
                                            <div class="mb-3" >
                                                <label for="recipient-name" id="credential_title" class="col-form-label">Account Number <span class="text-danger">*</span></label>
                                                <input type="number" name="account_number" class="form-control">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                        <div class="col-md-12" >
                                            <label class="font-medium font-15 color-heading "
                                                   style="color: white">----</label>
                                            <button class="form-control btn btn-primary ">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-12 my-4">
        <div class="card">
            <div class="card-header">
                <h3 class="">My Withdrawal Requests</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table ">
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
                                <th>{{ Str::title(str_replace('_', ' ', $withdraw->withdraw_option)) }}</th>
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
            $('.withdraw_amount').hide();
            $('.withdraw_amount input').prop('required', false);


        }
        if (selectedValue == '2') {
            $('.withdraw1').hide();
            $('.withdraw_amount').show();
            $('.withdraw_amount input').prop('required', true);
        }

    });

</script>
<script>
    function setPayment(value) {
        // alert(value);
        var amount = $('#amount').val();
        $('#withdraw_option').val(value);
        if(value == 'bkash' || value == 'rocket' || value == 'nagad'){
            $("#bankSelect").prop('required',false);
            $('#bank_option').hide();
            console.log('amount:' + amount);

            $('#transaction_id').show();
            $("#transaction_id input").prop('required',true);
           if(amount){
               $('#withdrawal_text').show();
               $("#withdrawal_amount"). text({{$setting->withdraw_conversion_rate}}*amount);
           }

            if(value == 'bkash'){
                $('#credential').empty();

                var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Bkash Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="account_number" class="form-control" required>`;
                $('#credential').html(html);
                $('#payment_number').text('Payment Number: '+$('#bkash_value').val());
            }
            else if(value == 'rocket'){
                $('#credential').empty();
                var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Rocket Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="account_number" class="form-control" required>`;
                $('#credential').html(html);
                $('#payment_number').text('Payment Number: '+$('#rocket_value').val());
            }
            else{
                $('#credential').empty();
                var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Nagad Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="account_number" class="form-control" required>`;
                $('#credential').html(html);
                $('#payment_number').text('Payment Number: '+$('#nagad_value').val());
            }
        }
        else{
            $('#withdrawal_text').hide();
            $('#transaction_id').hide();
            $("#transaction_id input").prop('required',false);
            if(value == 'skrill' || value== 'neteller'){
                $('#credential').empty();
                $("#bankSelect").prop('required',false);
                $('#bank_option').hide();
                var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Email Address<span class="text-danger">*</span></label>
                                                            <input type="email" name="account_number" class="form-control" required>`;
                $('#credential').html(html);
                if(value == 'skrill'){
                    $('#payment_number').text('Payment Credential: '+$('#skrill_value').val());
                }
                else{
                    $('#payment_number').text('Payment Credential: '+$('#neteller_value').val());
                }
            }
            else if(value == 'binance'){
                $('#credential').empty();
                $('#bank_option').hide();
                $("#bankSelect").prop('required',false);
                var html = `
                        <label for="recipient-name" id="credential_title" class="col-form-label">ID
                            <span class="text-danger">*</span></label>
                            <input type="text" name="account_number" class="form-control" required>
                        `;
                $('#credential').html(html);
                $('#payment_number').text('Payment Number: '+$('#binance_value').val());
            }
            else if(value == 'bank'){
                if(amount){
                    $('#withdrawal_text').show();
                    $("#withdrawal_amount"). text({{$setting->withdraw_conversion_rate}}*amount);
                }
                $('#credential').empty();
                $('#bank_option').show();
                $("#bankSelect").prop('required',true);
                var html = `
                        <label for="recipient-name" id="credential_title" class="col-form-label">Branch Name
                            <span class="text-danger">*</span></label>
                            <input type="text" name="bank_branch_name" class="form-control" required>
                        <label for="recipient-name" id="credential_title" class="col-form-label">Branch Code
                            <span class="text-danger">*</span></label>
                            <input type="text" name="bank_branch_code" class="form-control" required>
                        <label for="recipient-name" id="credential_title" class="col-form-label">Account Name
                            <span class="text-danger">*</span></label>
                            <input type="text" name="bank_account_name" class="form-control" required>
                        <label for="recipient-name" id="credential_title" class="col-form-label">Account Number
                            <span class="text-danger">*</span></label>
                            <input type="text" name="account_number" class="form-control" required>
                        `;
                $('#credential').html(html);
                $('#payment_number').text('Payment Number: '+$('#binance_value').val());
            }
            else if(value == 'visa_card'){
                $('#credential').empty();
                $("#bankSelect").prop('required',false);
                $('#bank_option').hide();
                var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Visa Card Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="account_number" class="form-control" required>`;
                $('#credential').html(html);
                $('#payment_number').text('Payment Number: '+$('#visa_card_value').val());
            }
            else if(value == 'perfect_money'){
                $("#bankSelect").prop('required',false);
                $('#bank_option').hide();
                $('#credential').empty();
                var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Memo (UXXXX..)<span class="text-danger">*</span></label>
                                                            <input type="text" name="account_number" class="form-control" required>`;
                $('#credential').html(html);
                $('#payment_number').text('Memo: '+$('#perfect_money_value').val());
            }
        }
    }
    function checkValue() {
        var selectedValue = $('#withdraw_type').val();

        if(selectedValue == 1 && $('#total_package').val() == 0){
            alert('No Package Available to Withdraw!!');
            return false;
        }
        else{
            return true;
        }
    }
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
