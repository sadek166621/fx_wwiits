@extends('frontend.master2')
@section('content')

   <div class="row">
       <div class="col-lg-12">
           <div class="card">
               <div class="card-header">
                   <h3>Used Activation Code</h3>
               </div>
               {{-- <h6>My Referral Code</h6>
               <h4 class="mb-5"><strong>{{ $student->refer_code }}</strong></h4>
               <div class="my-4">
                   <div class="my-4">
                       Total Leads: {{ $lead }} <br>
                       Today Leads: {{ $todayLeadsCount }} <br>
                   </div>


               </div> --}}
               {{-- <h6>My Reference</h6> --}}
               <div class="card-body table-responsive">
                   <table class="table ">
                       <thead>
                       <tr>
                           <th scope="col">SL</th>
                           <th scope="col">Name</th>
                           <th scope="col">Member ID</th>
                           <th scope="col">Joining Date</th>
                           <!--<th scope="col">Whatsapp</th>-->
                       </tr>
                       </thead>
                       <tbody>
                       @foreach ($activations  as $key=>$activation )
                           <tr>

                               <th scope="row">{{ $key+1 }}</th>
                               <td>{{ $activation->first_name }} {{ $activation->last_name }}</td>
                               <td>{{ $activation->refer_code }}</td>
                               <td>{{ date('Y-m-d', strtotime($activation->created_at))}}</td>
                               <!--<td>-->
                               <!--    <a class="theme-btn bg-black text-white border-white"-->
                               <!--        href="https://api.whatsapp.com/send/?phone={{ $activation->whatsapp_number}}"-->
                               <!--        target="_blank">Whatsapp</a>-->
                               <!--</td>-->


                           </tr>
                       @endforeach

                       </tbody>
                   </table>
               </div>

           </div>
       </div>
   </div>

    @endsection
