@extends('frontend.master2')
@section('content')
   <div class="row">

       <div class="col-lg-12">
           <div class="card">
               <div class="card-header">
                   <h3>Fund Add History</h3>
               </div>
               <div class="card-body table-responsive">
                   <table class="table ">
                       <thead>
                       <tr>
                           <th scope="col">SL</th>
                           <th scope="col">Date</th>
                           <th scope="col">Requested Amount</th>
                           <th scope="col">Comment</th>
                           <th scope="col">Status</th>

                       </tr>
                       </thead>
                       <tbody>

                       @if(count($items) > 0)
                           @foreach($items as $key=>$item)
                               <tr>
                                   <td>{{ $key+1 }}</td>
                                   <td>{{ date('Y-m-d H:i:s', strtotime($item->updated_at)) }}</td>
                                   <td>{{ $item->amount }}</td>
                                   <td>{{ $item->comment }}</td>
                                   <td class="@if($item->status == 1)
                                           text-success
                                       @elseif($item->status == 2)
                                           text-danger
                                       @else
                                           text-warning
                                       @endif">
                                       @if($item->status == 1)
                                           Approved
                                       @elseif($item->status == 2)
                                           Rejected
                                       @else
                                           Pending
                                       @endif
                                   </td>
                               </tr>
                           @endforeach
                       @else
                           <tr>
                               <td colspan="3" class="text-center"><strong>No Balance Added</strong></td>
                           </tr>
                       @endif

                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>

    @endsection
@push('js')
    {{-- <script>
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



    </script> --}}
@endpush
