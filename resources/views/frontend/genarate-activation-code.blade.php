@extends('frontend.master2')
@section('content')

   <div class="row">
       <div class="col-lg-12">
           @if(session()->has('success'))
               <div class="alert alert-success">
                   {{ session()->get('success') }}
               </div>
           @endif
           @if(session()->has('error'))
               <div class="alert alert-danger">
                   {{ session()->get('error') }}
               </div>
           @endif
           <div class="card">
               <div class="card-header">
                   <h3>Activation Codes</h3>
               </div>
               <div class="card-body table-responsive">
                   <table class="table ">
                       <thead>
                       <tr>
                           <th scope="col">SL</th>
                           <th scope="col">Activation Code</th>
                           <th scope="col">Activation Date</th>
                           <th scope="col">Status</th>
                           {{-- <th scope="col">Action</th> --}}
                       </tr>
                       </thead>
                       <tbody>
                            @if(count($activation_codes) > 0)
                                @foreach ($activation_codes  as $key=>$activation_code )

                                    @php
                                        $currentTime = now();
                                        $activationCodeLifetime = 24 * 60 * 60; // 24 hours in seconds
                                        $activationCodeGeneratedTime = $activation_code->activation_code_generated_at;
                                        $timeDifference = $currentTime->diffInSeconds($activationCodeGeneratedTime);
                                    @endphp
                                    <tr>

                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $activation_code->activation_code }}</td>
                                        <td>{{ $activation_code->activation_code_generated_at }}</td>
                                        <td>

                                            @if($timeDifference <= $activationCodeLifetime)
                                                <p style="color:green">Active</p>
                                            @else
                                                <p style="color:Red">Expired</p>

                                            @endif

                                        </td>
                                        {{-- <td>
                                            <a href="{{ route('delete-activation-code',$activation_code->id) }}" onclick="if(!confirm('Are You Sure?'))return false" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>

                                        </td> --}}

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center text-danger" colspan="4">No Code Generated Yet</td>
                                </tr>
                            @endif

                       </tbody>
                   </table>
               </div>

           </div>
       </div>
   </div>

    @endsection
