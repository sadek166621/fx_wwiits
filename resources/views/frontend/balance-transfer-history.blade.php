@extends('frontend.master2')
@section('content')
   <div class="row">

       <div class="col-lg-12">
           <div class="card">
               <div class="card-header">
                   <h3>Balance Transfer History</h3>
               </div>
               <div class="card-body table-responsive">
                   <table class="table ">
                       <thead>
                       <tr>
                           <th scope="col">SL</th>
                           <th scope="col">Type</th>
                           <th scope="col">Date</th>
                           <th scope="col">Amount</th>
                           <th scope="col">Transferred From</th>
                           <th scope="col">Transferred To</th>

                       </tr>
                       </thead>
                       <tbody>

                       @if(count($items) > 0)
                           @foreach($items as $key=>$item)
                               <tr>
                                   <td>{{ $key+1 }}</td>
                                   <td>{{ $item->transfer_type == 1 ? 'Self Transfer':'Transfer to Member' }}</td>
                                   <td>{{ date('Y-m-d H:i:s', strtotime($item->updated_at)) }}</td>
                                   <td>{{ $item->amount }}</td>
                                   <td>
                                       @if($item->transfer_from == 0)
                                           My Wallet
                                       @elseif($item->transfer_from == 1)
                                           Profit Wallet
                                       @elseif($item->transfer_from == 2)
                                           Affiliate Wallet
                                       @else
                                           Internal Transfer Wallet
                                       @endif
                                   </td>
                                   <td>
                                       @if($item->transferred_to == 0)
                                           Self Account
                                       @else
                                           {{ $item->member->first_name ?? ''}}{{ $item->member->last_name  ?? ''}} <br>({{ $item->member->refer_code ?? '' }})
                                       @endif
                                   </td>
                               </tr>
                           @endforeach
                       @else
                           <tr>
                               <td colspan="3" class="text-center"><strong>No Balance Transferred</strong></td>
                           </tr>
                       @endif

                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>

    @endsection

