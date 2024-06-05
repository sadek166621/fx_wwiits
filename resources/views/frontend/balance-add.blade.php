@extends('frontend.master2')
@section('content')
    @php
        $setting = getSetting();
    //    dd($setting->rocket);
    @endphp
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

           <div class="card">
               <div class="card-header">
                   <h3>Add Fund</h3>
                   @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>
                   @endif
               </div>
               <div class="card-body">
                   <input type="hidden" name="" id="conversion_rate" value="{{getSetting()->conversion_rate}}">

                   <form action="{{ route('money.add.submit') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="row">
                           <div class="col-md-12 mb-2">
                               <label class="font-medium font-15 color-heading">Amount (Dollars) </label>
                               <input type="text" name="amount" class="form-control" id="amount" oninput="updateOtherField(this.value)" required>
                           </div>
                       </div>

                       <div class="row mt-1 mt-md-1 pt-2 pt-md-3 payment-fields">
                           <label for=""  class="font-medium font-15 color-heading">Payment Method</label>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="visa_card" onclick="setPayment('visa_card')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/visa card.png" height="50px" width="110px" alt=""></div>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="binance" onclick="setPayment('binance')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/binance.png" height="50px" width="110px" alt=""></div>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="skrill" onclick="setPayment('skrill')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/skrill.png" height="50px" width="110px" alt=""></div>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="perfect_money" onclick="setPayment('perfect_money')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/perfectmoney.png" height="50px" width="110px" alt=""></div>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="neteller" onclick="setPayment('neteller')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/neteller.jpg" height="50px" width="110px" alt=""></div>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="bkash" onclick="setPayment('bkash')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/bkash.png" height="50px" width="110px" alt=""></div>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="nagad" onclick="setPayment('nagad')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/nagad.png" height="50px" width="110px" alt=""></div>
                           <div class="col-md-2 col-sm-4 col-4 m-3" id="nagad" onclick="setPayment('rocket')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/rocket.png" height="50px" width="110px" alt=""></div>
                       </div>

                       <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                           <div class="col-md-8 mb-3">
                               {{--                                <button type="button" class="btn " style="background: #FFD700;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Continue</button>--}}
                               <br>
                               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLabel">Payment</h5>

                                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                           </div>
                                           <div class="modal-body">
                                               <div class="payment-fields" >
                                                   <h5 class="text-center" id="withdrawal_text" style="display: none">You Will Get  <span id="withdrawal_amount"></span>TK After Adding Fund</h5>
                                                   <input type="hidden" id="payment_method" name="payment_method" value="">
{{--                                                   <div class="mb-3" id="bank_option" style="display: none">--}}
{{--                                                       <label for="recipient-name" id="credential_title" class="col-form-label">Bank <span class="text-danger">*</span></label>--}}
{{--                                                       <select name="bank_id" id="bankSelect" class="form-control">--}}
{{--                                                           <option value="">Select Bank</option>--}}
{{--                                                           @foreach($banks as $bank)--}}
{{--                                                               <option value="{{$bank->id}}">{{$bank->bank_name}}</option>--}}
{{--                                                           @endforeach--}}
{{--                                                       </select>--}}
{{--                                                   </div>--}}
                                                   <div id="credential">
                                                       <div class="mb-3" >
                                                           <label for="recipient-name" id="credential_title" class="col-form-label">Account Number <span class="text-danger">*</span></label>
                                                           <input type="number" name="account_number" class="form-control">
                                                       </div>
                                                   </div>

                                                   <div class="payment-fields">


                                                       <div class="mb-3" id="transaction_id" style="display: none">
                                                           <label for="recipient-name" class="col-form-label">Transaction ID <span class="text-danger">*</span></label>
                                                           <input type="text" name="transaction_id" class="form-control">
                                                       </div>
                                                   </div>

                                               </div>
                                           </div>


                                           <div class="modal-footer">
                                               {{--                                                <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>--}}
                                               <button type="submit" class="btn " style="background: #FFD700;">Add Fund</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-12 d-flex justify-content-end">
                           <button type="submit" class="btn btn-primary font-15 fw-bold">Submit</button>
                       </div>
                   </form>
               </div>


           </div>
       </div>
   </div>

    @endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function setPayment(value) {
        $('#payment_method').val(value);
        if(value == 'bkash' || value == 'rocket' || value == 'nagad'){
            $("#bankSelect").prop('required',false);
            $('#bank_option').hide();
            var amount = $('#amount').val();
            console.log('amount:' + amount);

            $('#transaction_id').show();
            $("#transaction_id input").prop('required',true);
            if(amount){
                $('#withdrawal_text').show();
                $("#withdrawal_amount"). text({{$setting->conversion_rate}}*amount);
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
                        <label for="recipient-name" id="credential_title" class="col-form-label">Link
                            <span class="text-danger">*</span></label>
                            <input type="text" name="binance_link" class="form-control" required>
                        <label for="recipient-name" id="credential_title" class="col-form-label">Image
                            <span class="text-danger">*</span></label>
                            <input type="file" name="binance_image" class="form-control" accept="image/*" required>
                        `;
                $('#credential').html(html);
                $('#payment_number').text('Payment Number: '+$('#binance_value').val());
            }
            else if(value == 'bank'){
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
</script>
<script>
    // Function to update the span tag with the entered amount multiplied by the conversion rate
    function updateOtherField(value) {
        // Get the span tag
        var amountDisplay = document.getElementById("amountDisplay");

        // Get the conversion rate
        var conversionRate = document.getElementById("conversion_rate").value;

        // Multiply the entered amount by the conversion rate
        var convertedAmount = (value * conversionRate);

        // Set the text content of the span tag to the converted amount
        amountDisplay.textContent = convertedAmount.toFixed(4);
    }
</script>

