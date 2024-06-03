@extends('frontend.master2')
@section('content')

   <div class="row">
       <div class="col-lg-12">
           <div class="card">
               <div class="card-header">
                   <h3>Profit History (Day)</h3>
               </div>
               <div class="card-body">
                   <table class="table table-responsive">
                       <thead>
                       <tr>
                           <th scope="col">SL</th>
                           <th scope="col">Date</th>
                           <th scope="col">Profit</th>

                       </tr>
                       </thead>
                       @php $totalProfit = 0; @endphp
                       <tbody>
                       @foreach($deposit_profit as $key=>$profit)
                           <tr>
                               <td>{{$key+1}}</td>
                               <td>{{date('Y-m-d', strtotime($profit->created_at))}}</td>
                               <td>{{$totalProfit+=$profit->profit}}</td>
                           </tr>
                       @endforeach

                       <!-- Display the total profit amount after the loop -->
                       <tr>
                           <td colspan="2"><strong>Total Profit:</strong></td>
                           <td><strong>{{ $totalProfit }}</strong></td>
                       </tr>

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
