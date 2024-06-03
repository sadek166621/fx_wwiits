@extends('frontend.master2')
@section('content')

   <div class="row">
       <div class="col-lg-12">
           <div class="card card-body">
               <h3>My Referral Code</h3>
               <h4 class="mb-5"><strong>{{ $student->refer_code }}</strong></h4>
               <div class="mt-2 mb-1">
                   <div class="my-4">
                       Total Leads: <span class="text-success">{{ $lead }}</span> <br>
                       Today Leads: <span class="text-success"> {{ $todayLeadsCount }}</span> <br>
                   </div>


               </div>
           </div>
       </div>
       <div class="col-lg-12">
           <div class="card">
               <div class="card-header">
                   <h3>My Reference</h3>
               </div>
               <div class="card-body table-responsive">

                   <table class="table ">
                       <thead>
                       <tr>
                           <th scope="col">SL</th>
                           <th scope="col">Name</th>
                           <th scope="col">Student ID</th>
                           <th scope="col">Joining Date</th>
                           {{-- <th scope="col">Whatsapp</th> --}}
                       </tr>
                       </thead>
                       <tbody>
                       @foreach ($references  as $key=>$reference )
                           <tr>

                               <th scope="row">{{ $key+1 }}</th>
                               <td>{{ $reference->first_name }}</td>
                               <td>{{ $reference->refer_code }}</td>
                               <td>{{ date('Y-m-d', strtotime($reference->created_at))}}</td>
                               {{-- <td>
                                   <a class="theme-btn bg-black text-white border-white"
                                       href="https://api.whatsapp.com/send/?phone={{ $reference->whatsapp_number}}"
                                       target="_blank">Whatsapp</a>
                               </td> --}}


                           </tr>
                       @endforeach

                       </tbody>
                   </table>
               </div>

           </div>
       </div>
   </div>

    @endsection
