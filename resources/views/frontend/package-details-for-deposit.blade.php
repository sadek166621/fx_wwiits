@extends('frontend.master2')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row bg-white">

                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3>Package Details</h3>
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
                                                        <span id="usa_amount">
                                                            Forex Deposit
                                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Deposit Amount</th>
                                    <td>
                                                        <span id="usa_amount">
                                                            ${{ $item->usa_amount }}
                                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Profit</th>
                                    <td>
                                                        <span id="usa_amount">
                                                            ${{ $item->profit }}
                                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Maturity Time (Days)</th>
                                    <td>
                                                        <span id="usa_amount">
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
                                    <td><span id="usa_amount">
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

