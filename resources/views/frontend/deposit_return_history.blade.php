@extends('frontend.master2')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Deposit Return History</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Date Time</th>
                            <th scope="col">Package Name</th>
                            <th class="text-center" scope="col">Previous Balance</th>
                            <th class="text-center" scope="col">Returning Amount</th>
                            <th class="text-center" scope="col">Current Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $items as $key=>$item )
                            <tr>

                                <th scope="row">{{ $key+1 }}</th>
                                <td >{{ $item->created_at }}</td>
                                <td >{{ $item->deposit->package->package_name ?? '' }}</td>
                                <td class="text-center">${{ $item->previous_amount }}</td>
                                <td class="text-center">${{ $item->returning_amount }}</td>
                                <td class="text-center">${{$item->current_amount}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

    @endsection
