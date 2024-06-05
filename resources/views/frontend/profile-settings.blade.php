@extends('frontend.master2')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3> Profile View</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <img style="margin: 7% 25%" src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" class="rounded-circle mb-2" height="150px" width="150px" alt="" >
                                <p class="text-center" style="font-size: 20px">{{$student->first_name}} {{$student->last_name}}</p>
                            </div>
                        </div>
                        <div class="col-md-8 m-auto">

                            <p> <span class="fw-bold">Member ID:</span> {{ $student->refer_code }}</p>
                            <p>Joined as Forex Training and Job</p>
                            <p class=""> <span class="fw-bold">My Referral Code: </span>{{ $student->refer_code }}</p>
                            <div>
                                <form action="{{ route('refer-code-sign-up', $student->refer_code) }}" method="get">
                                    @csrf
                                    <p class="fw-bold">My Referral Link <small> <strong class="text-primary">(Click The Link To Copy)</strong></small>: </p>
                                    <p onclick="myFunction()" style="cursor: pointer">https://fxwwiits.com/refer-code-sign-up/{{ $student->refer_code }}</p>
                                    <input type="hidden" class="referral_link"
                                           {{-- value="https://gurudigitalit.com/student-signup/{{ $student->refer_code }}"> --}}
                                           value="http://127.0.0.1:8000/refer-code-sign-up/{{ $student->refer_code }}">
                                </form>
                                <a href="{{ route('activation-code') }}" onclick="if(!confirm('Do You Want To Genarate An Activation Code?'))return false" class="btn btn-primary font-14 fw-bold fs-6"
                                   style="font-size:0.8rem !important; text-decoration: none ">Genarate Activation Code</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-none">
        <div class="col-xl-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Activation Code</h3>
                </div>
                <div class="card-body">
                    <p class="">Genarate Activation Code To Activate Referred Account </p>
                    <a href="{{ route('activation-code') }}" onclick="if(!confirm('Do You Want To Genarate An Activation Code?'))return false" class="btn btn-primary font-14 fw-bold fs-6"
                       style="font-size:0.8rem !important; text-decoration: none ">Genarate Activation Code</a>

                    <script>
                        function myFunction() {
                            // Get the text field
                            var copyText = document.querySelector('.referral_link');

                            // Select the text field
                            copyText.type = "text";
                            copyText.select();
                            copyText.setSelectionRange(0, 99999); // For mobile devices

                            // Copy the text inside the text field
                            navigator.clipboard.writeText(copyText.value);

                            // Alert the copied text
                            alert("Copied the text: " + copyText.value);
                            copyText.type = "hidden";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>Profile Settings</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('student-profile-update', $student->id) }}"method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-top mb-4">
                            <div class="d-flex align-items-center">
                                <div class="profile-image radius-50">

                                    <img class="avater-image mb-2" id="target1"
                                         src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" height="100px" width="100px"
                                         alt="img">
                                    <div class="custom-fileuplode">
                                        <label for="fileuplode"
                                               class="file-uplode-btn bg-hover text-white radius-50">
                                                                <span class="iconify"
                                                                      data-icon="bx:bx-edit"></span></label>
                                        <input type="file" id="fileuplode" name="image"
                                               accept="image/*" class="putImage1"
                                               onchange="previewFile(this)">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="d-none table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">My Wallet</th>
                                    <th class="text-center">Profit</th>
                                    <th class="text-center">Affiliate Balance</th>
                                    <th class="text-center">Internal Transfer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">${{ $student->bonus }}</td>
                                    <td class="text-center">${{ $student->profit }}</td>
                                    <td class="text-center">${{ $student->affiliate_balance }}</td>
                                    <td class="text-center">${{ $student->tranfer_balance }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-30">

                                <label class="font-medium font-15 color-heading">First Name</label>
                                <p>{{ $student->first_name }}</p>
                            </div>
                            <div class="col-md-6 mb-30">
                                <label class="font-medium font-15 color-heading">Last Name</label>
                                <p>{{ $student->last_name }}</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Email</label>
                                <p>{{ $student->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Phone
                                    Number</label>
                                <input  type="text" name="phone" value="{{ $student->phone }}"
                                        class="form-control" placeholder="Type your phone number">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Country</label>
                                <input  type="text" name="country" value="{{ $student->country }}"
                                        class="form-control" placeholder="Type your country">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">State</label>
                                <input  type="text" name="state" value="{{ $student->state }}"
                                        class="form-control" placeholder="Type your state">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">City</label>
                                <input  type="text" name="city" value="{{ $student->city }}"
                                        class="form-control" placeholder="Type your city">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Postal Code</label>
                                <input  type="text" name="postal_code" value="{{ $student->postal_code }}"
                                        class="form-control" placeholder="Type your postal_code">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Facebook</label>
                                <input  type="text" name="fb_link" value="{{ $student->fb_link }}"
                                        class="form-control" placeholder="Type your fb_link">
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Youtube</label>
                                <input required type="text" name="yt_link" value=""
                                    class="form-control" placeholder="Type your yt_link">
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Bio</label>
                                <textarea class="form-control" name="about_me"
                                          id="exampleFormControlTextarea1" rows="3"
                                          placeholder="Type about yourself">{{ $student->about_me }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-md-12">
                                <label class="font-medium font-15 color-heading">Gender</label>

                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input required" type="radio"
                                               name="gender" id="inlineRadio1" value="Male" @if ($student->gender == 'Male' ) checked @endif>
                                        <label class="form-check-label"
                                               for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input required" type="radio"
                                               name="gender" id="inlineRadio2" value="Female"@if ($student->gender == 'Female' ) checked @endif>
                                        <label class="form-check-label"
                                               for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"
                                               id="inlineRadio3" value="Others" @if ($student->gender == 'Others' ) checked @endif>
                                        <label class="form-check-label"
                                               for="inlineRadio3">Others</label>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="profile-top mb-4">
                            <div class="d-flex align-items-center">
                                <div class="profile-image radius-50">
                                    <label for="fileuplode"
                                           class="file-uplode-btn bg-hover text-dark radius-50">
                                        Voter ID Card</label><br>
                                    @if($student->voter_id_card)
                                        <img class="avater-image mb-2" id="target1"
                                             src="{{ asset('assets') }}/images/uploads/students/voter-id-card/{{ $student->voter_id_card }}" height="100px" width="100px"
                                             alt="img">
                                    @endif
                                    <div class="custom-fileuplode">

                                        <input type="file" id="fileuplode2" name="voter_id_card"
                                               accept="image/*" class="putImage1"
                                               onchange="previewFile(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 mb-30">--}}
{{--                                <label class="font-medium font-15 color-heading">Withdrawal Option</label>--}}
{{--                                <input  type="text" name="withdraw_option" value="{{ $student->withdraw_option }}"--}}
{{--                                        class="form-control" placeholder="Type Your Withdrawal Option">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12 mb-30">--}}
{{--                                <label class="font-medium font-15 color-heading">Accounts Number</label>--}}
{{--                                <input  type="text" name="account_number" value="{{ $student->account_number }}"--}}
{{--                                        class="form-control" placeholder="Type Your Accounts Number">--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <button type="submit"
                                class="btn btn-primary font-10 fw-bold fs-6"
                                style="font-size:0.8rem !important ">Save
                        </button>

                    </form>
                </div>
                {{-- <div class="my-4">
                    <form action="#"
                        method="post">
                        <input type="hidden" name="_token"
                            value="1xATONWiuHKv8Qc2yJE0ree21F4rALE6TPtFjB2o">
                        <p>Verify your e-mail and get reward!</p>

                        <button type="submit"
                            class="theme-btn theme-button1 theme-button3 font-10 fw-bold fs-6"
                            style="font-size:0.8rem !important ">Send Verification Code</button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

 @endsection
