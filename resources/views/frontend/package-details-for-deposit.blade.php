@extends('frontend.master2')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row bg-white">

                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3>Package Details</h3>
                            <form action="{{route('deposit.add')}}" method="post" onsubmit="return checkBalance()">
                                @csrf
                                <input type="hidden" name="package_id" value="{{$item->id}}">
                                <input type="hidden" name="amount" value="{{$item->usa_amount}}">
                                <input type="hidden" name="" id="balance" value="{{$student->bonus}}">
                                <input type="hidden" name="profit_amount" value="{{$item->profit}}">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">Deposit</a>
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                {{--                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>--}}
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores aspernatur esse maiores molestiae necessitatibus odit officiis quasi quibusdam, sit.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Deposit Package</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>

                                <tr>
                                    <th scope="row">Package Name</th>
                                    <td>{{ $item->package_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Package Type</th>
                                    <td>
                                                        <span id="">
                                                            Forex Deposit
                                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Deposit Amount</th>
                                    <td>
                                        $<span id="usa_amount">
                                                            {{ $item->usa_amount }}
                                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Profit</th>
                                    <td>
                                                        <span id="">
                                                            ${{ $item->profit }}
                                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Maturity Time (Days)</th>
                                    <td>
                                                        <span id="">
                                                            {{ $item->maturity_time }}
                                                        </span>
                                    </td>
                                </tr>
{{--                                <tr>--}}
{{--                                    <th>Deposit Return Policy</th>--}}
{{--                                    <td><span id="usa_amount">--}}
{{--                                                            {{ $item->deposit_return_policy }}--}}
{{--                                                        </span></td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <th>Terms & Conditions</th>
                                    <td><span id="">
                                                            {{ $item->terms }}
                                                        </span></td>
                                </tr>
                                {{-- <tr>
                                    <th scope="row">Minimum Time To Initiate Withdraw</th>
                                    <td>
                                        <span id="usa_amount">
                                            {{ $item->minimum_withdraw_time }}
                                        </span>
                                    </td>
                                </tr> --}}

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

@push('js')
    <script>
        function checkBalance() {

            var balance = Number($('#balance').val());
            var deposit_amount = Number($('#usa_amount').text());
            if(balance >= deposit_amount){
                return true;
            }
            else{
                alert('You Do not Have Sufficient Balance To Deposit. Please Add Balance to Your Wallet!!'  );
                return false;
            }
        }



    </script>
@endpush
