@extends('frontend.master2')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>My Passbook</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Sr No</th>
                            <th scope="col">Date Time</th>
                            <th class="text-center" scope="col">Amount</th>
                            <th class="text-center" scope="col">Referral Bonus ID</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $passbook as $key=>$passbook )
                            <tr>

                                <th scope="row">{{ $key+1 }}</th>
                                <td >{{ $passbook->created_at }}</td>
                                <td class="text-center">${{ $passbook->amount }}</td>
                                <td class="text-center">{{ Str::after($passbook->comments,'Referral Bonus ID:' ) }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

    @endsection
