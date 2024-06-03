@extends('frontend.master2')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="row bg-white">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>My Deposits</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Profit (Per Day)</th>
                                    <th scope="col">Status</th>
                                    <th class="text-center" scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($items)>0)
                                    @foreach ( $items as $key=>$item )
                                        <tr>

                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>{{date('Y-m-d H:i:s', strtotime($item->created_at))}}</td>
                                            <td>{{ $item->package->package_name ?? '' }}</td>
                                            @php
                                                $origin = date_create($item->created_at);
                                                $target = date_create(date('Y-m-d'));
                                                $interval = date_diff($origin, $target);
                                            @endphp
                                            <td><span id="usa_amount{{$key}}">${{ $item->amount }}</span></td>
                                            {{-- <td>
                                                {{$interval->format('%a')*$item->package->profit}}
                                            </td> --}}
                                            <td>
                                                ${{ $item->profit_amount }}
                                            </td>
                                            <td class="{{$item->status == 1 ? 'text-success':'text-warning'}}">
                                                @if($item->status == 1)
                                                    Approved
                                                @else
                                                    On Hold
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-primary mx-2" style="border-radius: 7px;" href="{{ route('deposit.profit.history',$item->id) }}">Profit History</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center"><strong class="text-danger">No Deposit Made</strong></td>
                                    </tr>
                                @endif

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
        function checkBalance(rowId) {

            var balance = Number($('#balance').val());
            var deposit_amount = Number($('#usa_amount'+rowId).val());
                if(balance > deposit_amount){
                    return true;
                }
                else{
                    alert('You Do not Have Sufficient Balance To Deposit. Please Add Balance to Your Wallet!!'  );
                    return false;
                }
        }

    </script>
@endpush
