@extends('frontend.master2')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">

    </div>
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
        <div class="col-xl-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Deposit Overview</h4>
                </div>
                <div class="box-body pt-10">
                    <div class="table-responsive">
                        <table class="table product-overview mb-0">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Package</th>
                                <th>Deposit Amount</th>
                                <th>Withdrawn Amount</th>
                                <th>Current Amount</th>
                                <th>Profit Amount</th>

                            </tr>
                            </thead>
                            <tbody>@if(count($deposits) > 0)

                               @foreach($deposits as $key=>$deposit)
                                   @php $summary = getDepositSummary($deposit->package_id, $student->id) @endphp
                                   <tr>
                                       <td>{{$key+1}}</td>
                                       <td>{{$deposit->package->package_name ??''}}</td>
                                       <td>${{$summary['total_deposit']}}</td>
                                       <td>${{$summary['total_withdraw']}}</td>
                                       <td>${{$summary['current_deposit']}}</td>
                                       <td>${{$summary['total_profit']}}</td>

                                   </tr>
                               @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-danger tw-bold text-center">No Deposit Found</td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
