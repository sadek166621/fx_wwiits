@php
    $setting = getSetting();
//    dd($setting->rocket);
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" type="image/x-icon">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/686e4da3bd.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/styles.css">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @media (min-width: 991px) {
            .sign-up-img{
                position: relative;
                bottom: -255px;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class="row ">
            <input type="hidden" name="" id="rocket_value" value="{{$setting->rocket}}">
            <input type="hidden" name="" id="bkash_value" value="{{$setting->bkash}}">
            <input type="hidden" name="" id="nagad_value" value="{{$setting->nagad}}">
            <input type="hidden" name="" id="skrill_value" value="{{$setting->skrill}}">
            <input type="hidden" name="" id="binance_value" value="{{$setting->binance}}">
            <input type="hidden" name="" id="visa_card_value" value="{{$setting->visa_card}}">
            <input type="hidden" name="" id="neteller_value" value="{{$setting->neteller}}">
            <input type="hidden" name="" id="perfect_money_value" value="{{$setting->perfect_money}}">
            <input type="hidden" name="binance_link" id="" value="{{$setting->binance_link ?? ''}} ">

                <div class="col-12 col-md-5 flex-column flex-column-reverse">
                    <div class="nav-background h-100">
                        <div class="">
                            <a href="{{ route('home') }}"><img class="img-fluid p-5 " src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" alt="logo" style="width: 60%!important"></a>
                        </div>
                        <h3 class="text-light fw-medium p-4">Develop Your Trading Skills With FX WWIITS</h3>
                        <p class="text-light fw-medium p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum enim mollitia quo quod ullam. At commodi dolor explicabo facere ipsam libero magni neque, nostrum porro possimus quibusdam repellat repellendus reprehenderit!</p>
                        <div class="">
                            <img src="{{ asset('frontend') }}/images/signup-img.jpg" alt="hero" class="img-fluid w-100 sign-up-img">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 flex-column flex-column-reverse">
                    <div class="bg-white">
                        <br>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('student-registration-form') }}" enctype="multipart/form-data">
                            @csrf
                            <h5 class="text-color fw-medium mb-1">Create an Account</h5>
                            <p class="" style="color: #141435;">Already have an account? <a class=""style="color: #95cd41;" href="{{ route('student.signin') }}">Sign In</a></p>

                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3" for="email">Email</label>
                                    <input type="email" name="email" id="email" value="" class="form-control"
                                           placeholder="Type your email" >
{{--                                    <input type="hidden" value="{{ $referal_bonus->amount }}" name="bonus_amount">--}}
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3 d-none">
                                <div class="col-md-8">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3" for="email">Phone
                                        <span class="text-danger">*</span></label>
                                    <input type="number" name="phone"  value="" class="form-control"
                                           placeholder="Type your Phone Number">
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-3">
                                    <div class="input__group">
                                        <label class="label-text-title color-heading fw-medium text-color mb-3">Country
                                            Code <span class="text-danger">*</span></label>
                                        <select class="form-control" name="country_code" required>
                                            <option value>Select Code</option>
                                            <option value="+1">Australia(+1)</option>
                                            <option value="+88">Bangladesh(+88)</option>
                                            <option value="+1">Canada(+1)</option>
                                            <option value="+91">India(+91)</option>
                                            <option value="+92">Pakistan(+92)</option>
                                            <option value="+44">UK(+44)</option>
                                            <option value="+1">USA(+1)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="mobile_number">Phone Number <span class="text-danger">*</span></label>
                                    <input type="number" name="whatsapp_number" id="mobile_number" value="" class="form-control"
                                           placeholder="Type your Phone number" required>
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-4">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="first_name">First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" id="first_name" value="" class="form-control"
                                           placeholder="First Name" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="last_name">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" id="last_name" value="" class="form-control"
                                           placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="password">Password <span class="text-danger">*</span></label>

                                    <div class="form-group mb-0 position-relative">
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" value=""
                                                   class="form-control password" placeholder="*********" required>
                                            <a class="btn btn-secondary" id="password_btn"><i id="password_icon" class="fa fa-eye"></i></a>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>

                                    <div class="form-group mb-0 position-relative">
                                        <div class="input-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation" value=""
                                                   class="form-control password" placeholder="*********" required>
                                            <a class="btn btn-secondary" id="password_confirmation_btn"><i id="password_confirmation_icon" class="fa fa-eye"></i></a>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="Referral code">Reason For Joining <span class="text-danger">*</span></label>

                                    <div class="form-group mb-0 position-relative">
                                        <select name="joining_reason" id="" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="1">Forex Training and Affiliation</option>
                                            <option value="2">Forex Training and Job</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="Referral code">Referral code <span class="text-danger">*</span></label>

                                    <div class="form-group mb-0 position-relative">
                                        <input type="number" name="refered_code" value="@isset($refercode){{$refercode->refer_code}}@endisset" class="form-control referral_code"
                                               placeholder="Refferel Code" @isset($refercode) readonly @else required @endisset>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8">
                                    <label class="label-text-title color-heading fw-medium text-color mb-3"
                                           for="Referral code">Image <span class="text-danger">*</span></label>

                                    <div class="form-group mb-0 position-relative">
                                        <input type="file" name="image" class="form-control referral_code" accept="image/*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8">
                                    <label for="recipient-name" class="col-form-label">Select Option: <span class="text-danger">*</span></label>
                                    <select name="select_option" id="select-option" class="form-control">
                                        <option value="">Select</option>
                                        <option value="payment">Payment</option>
                                        <option value="activation_code">Activation Code</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3 activation-code-fields" style="display: none">
                                <div class="col-md-8">
                                    <label for="recipient-name" class="col-form-label">Activation Code <span class="text-danger">*</span></label>
                                    <input type="text" name="reference_activation_code" class="form-control">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label text-color mb-0" for="flexCheckChecked">
                                                By clicking Create account, I agree that I have read and accepted the <a
                                                    href=""
                                                    class="color-hover text-danger text-decoration-underline">Terms of Use</a> and <a
                                                    href=""
                                                    class="color-hover text-danger text-decoration-underline">Privacy Policy.</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-4">
                                    <button type="submit" class="btn " style="background: #95cd41;">Sign Up</button>
                                </div>
                            </div>
                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3 payment-fields"  style="display: none">
                                <label for=""  class="font-medium font-15 color-heading">Payment Method</label>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="visa_card" onclick="setPayment('visa_card')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/visa card.png" height="50px" width="110px" alt=""></div>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="binance" onclick="setPayment('binance')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/binance.png" height="50px" width="110px" alt=""></div>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="skrill" onclick="setPayment('skrill')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/skrill.png" height="50px" width="110px" alt=""></div>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="perfect_money" onclick="setPayment('perfect_money')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/perfectmoney.png" height="50px" width="110px" alt=""></div>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="neteller" onclick="setPayment('neteller')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/neteller.jpg" height="50px" width="110px" alt=""></div>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="bkash" onclick="setPayment('bkash')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/bkash.png" height="50px" width="110px" alt=""></div>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="nagad" onclick="setPayment('nagad')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/nagad.png" height="50px" width="110px" alt=""></div>
                                <div class="col-md-2 col-sm-4 col-4 m-3" id="rocket" onclick="setPayment('rocket')" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('frontend')}}/payment-method/rocket.png" height="50px" width="110px" alt=""></div>
                            </div>

                            <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                <div class="col-md-8 mb-3">
                                    {{--                                <button type="button" class="btn " style="background: #95cd41;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Continue</button>--}}
                                    <br>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3"></div>
                                                    <div class="payment-fields" style="display: none;">
                                                        <h5 class="text-center">You Need to Pay {{$setting->reg_charge}}$ <span id="reg_charge_bd">({{$setting->reg_charge*$setting->conversion_rate}}TK)</span>
                                                            <br>to Confirm Your Registration</h5>
                                                        <h6 class="text-center" id="payment_number"></h6>

                                                        <input type="hidden" id="payment_method" name="payment_method" value="">
                                                        <input type="hidden" name="payment_amount" value="{{$setting->reg_charge}}">
                                                        <div class="mb-3" id="credential">
                                                            <label for="recipient-name" id="credential_title" class="col-form-label">Account Number <span class="text-danger">*</span></label>
                                                            <input type="number" name="payment_number" class="form-control">
                                                        </div>
                                                        <div class="mb-3" id="transaction_id">
                                                            <label for="recipient-name" class="col-form-label">Transaction ID <span class="text-danger">*</span></label>
                                                            <input type="text" name="transaction_id" class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="row mt-2 mt-md-3 pt-2 pt-md-3">
                                                        <div class="col-md-12">
                                                            <div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                                    <label class="form-check-label text-color mb-0" for="flexCheckChecked">
                                                                        By clicking Create account, I agree that I have read and accepted the <a
                                                                            href=""
                                                                            class="color-hover text-danger text-decoration-underline">Terms of Use</a> and <a
                                                                            href=""
                                                                            class="color-hover text-danger text-decoration-underline">Privacy Policy.</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    {{--                                                <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>--}}
                                                    <button type="submit" class="btn " style="background: #95cd41;">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

    </section>
    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select-option').change(function() {
                var selectedOption = $(this).val();

                if (selectedOption == 'payment') {
                    $('.payment-fields').show();
                    $('.activation-code-fields').hide();
                } else if (selectedOption == 'activation_code') {
                    $('.payment-fields').hide();
                    $('.activation-code-fields').show();
                } else {
                    $('.payment-fields').hide();
                    $('.activation-code-fields').hide();
                }
            });
        });
    </script>
    <script>
        $('#password_btn').click(function (){
            $('#password_icon').toggleClass("fa-eye fa-eye-slash");
            var input = $("#password");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        $('#password_confirmation_btn').click(function (){
            $('#password_confirmation_icon').toggleClass("fa-eye fa-eye-slash");
            var input = $("#password_confirmation");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script>
        function setPayment(value) {
            $('#payment_method').val(value);
            if(value == 'bkash' || value == 'rocket' || value == 'nagad'){
                $('#reg_charge_bd').show();
                $('#transaction_id').show();
                $("#transaction_id input").prop('required',true);
                if(value == 'bkash'){
                    $('#credential').empty();
                    var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Bkash Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="payment_number" class="form-control">`;
                    $('#credential').html(html);
                    $('#payment_number').text('Payment Number: '+$('#bkash_value').val());
                }
                else if(value == 'rocket'){
                    $('#credential').empty();
                    var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Rocket Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="payment_number" class="form-control">`;
                    $('#credential').html(html);
                    $('#payment_number').text('Payment Number: '+$('#rocket_value').val());
                }
                else{
                    $('#credential').empty();
                    var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Nagad Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="payment_number" class="form-control">`;
                    $('#credential').html(html);
                    $('#payment_number').text('Payment Number: '+$('#nagad_value').val());
                }
            }
            else{
                $('#reg_charge_bd').hide();
                $('#transaction_id').hide();
                $("#transaction_id input").prop('required',false);
                if(value == 'skrill' || value== 'neteller'){
                    $('#credential').empty();
                    var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Email Address<span class="text-danger">*</span></label>
                                                            <input type="email" name="payment_number" class="form-control">`;
                    $('#credential').html(html);
                    if(value == 'skrill'){
                        $('#payment_number').text('Payment Credential: '+$('#skrill_value').val());
                    }
                    else{
                        $('#payment_number').text('Payment Credential: '+$('#neteller_value').val());
                    }
                }
                else if(value == 'binance'){
                    var binance_id = $('#binance_value').val();
                    $('#credential').empty();
                    var html = `
                    <div class="mb-3 text-center"><span>Binance ID: ${binance_id}</span><br>
                    <span>Binance Link: <a href="{{$setting->binance_link ?? '#'}}"
                    target="_blank">{{$setting->binance_link ?? ''}}</a></span><br>
                    <img class="mt-2" src="{{ asset('assets') }}/images/uploads/{{$setting->binance_image}}" height="100px" alt=""/></div>`;
                     html += `<label for="recipient-name" id="credential_title" class="col-form-label">ID<span class="text-danger">*</span></label>
                                                            <input type="text" name="payment_number" class="form-control">`;
                    $('#credential').html(html);
                    // $('#payment_number').text('Payment Number: '+$('#binance_value').val());
                }
                else if(value == 'visa_card'){
                    $('#credential').empty();
                    var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Visa Card Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="payment_number" class="form-control">`;
                    $('#credential').html(html);
                    $('#payment_number').text('Payment Number: '+$('#visa_card_value').val());
                }
                else if(value == 'perfect_money'){
                    $('#credential').empty();
                    var html = `<label for="recipient-name" id="credential_title" class="col-form-label">Memo (UXXXX..)<span class="text-danger">*</span></label>
                                                            <input type="text" name="payment_number" class="form-control">`;
                    $('#credential').html(html);
                    $('#payment_number').text('Memo: '+$('#perfect_money_value').val());
                }
            }
        }
    </script>

    {!! Toastr::message() !!}
</body>

</html>
