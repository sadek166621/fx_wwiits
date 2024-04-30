@extends('frontend.master2')
@section('content')

    <!-- Main Content Start-->

    <div class="bg-page">
        <!-- Page Header Start -->
        <header class="page-banner-header blank-page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="blank-page-banner-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="page-banner-content text-center">
                                    <h3 class="page-banner-heading color-heading pb-15">Hey, {{ $student->first_name }} {{ $student->last_name }} <img
                                            src="{{ asset('frontend') }}/css/img/icons-svg/waving-hand.webp"
                                            alt="student" class="me-2"></h3>

                                    <!-- Breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item font-14"><a
                                                  class="text-decoration-none"  href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item font-14 active" aria-current="page">Package
                                            </li>
                                        </ol>
                                    </nav>
                                    <!-- Breadcrumb End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Header End -->

        <!-- Student Profile Page Area Start -->
        <section class="student-profile-page">
            <div class="container">
                <div class="student-profile-page-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="row bg-white">
                                <!-- Student Profile Left part -->
                                <div class="col-lg-3 p-0">
                                    @include('frontend.include.menu')
                                </div>
                                <!-- Student Profile Right part -->
                                <div class="col-lg-9 p-0">
                                    <div class="student-profile-right-part">
                                        <h6>My Packages</h6>
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL</th>
                                                    <th scope="col">Deposit Package</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($items) > 0)
                                                    @foreach ( $items as $key=>$item )
                                                        <tr>

                                                            <th scope="row">{{ $key+1 }}</th>
                                                            <th>{{ $item->package_name }}</th>
                                                            <td><span id="usa_amount{{$key}}">{{ $item->usa_amount }}</span>$</td>
                                                            <td class="btn-group">
                                                                <a class="btn btn-warning mx-2" style="border-radius: 7px;" href="{{ route('package.details',$item->id) }}">Details</a>

                                                                <form action="{{route('deposit.add')}}" method="post" onsubmit="return checkBalance({{$key}})">
                                                                    @csrf
                                                                    <input type="hidden" name="package_id" value="{{$item->id}}">
                                                                    <input type="hidden" name="amount" value="{{$item->usa_amount}}">
                                                                    <input type="hidden" name="" id="balance" value="{{$student->bonus}}">
                                                                    <input type="hidden" name="profit_amount" value="{{$item->profit}}">
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$item->id}}">Deposit</button>

                                                                    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                          <div class="modal-content" style="position: relative;top: 84px;">
                                                                            <div class="">
                                                                              {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                                                                              <button type="button" class="close mx-3" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                              </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <input type="checkbox" required > Lorem ipsum dolor sit, amet consectetur adipisicing elit. In harum nihil blanditiis eum corrupti, sunt cupiditate beatae odio tempora doloremque laborum ullam autem, consequatur dicta, vero minima reprehenderit quis! Nobis.
                                                                            </div>
                                                                            <div class="">
                                                                              <button type="submit" class="btn btn-primary mb-3 mx-4 float-right">Submit</button>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                </form>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="4" class="text-center"> <strong class="text-danger">No Deposit Package Available</strong></td>
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
            </div>
        </section>
        <!-- Student Profile Page Area End -->
    </div>
    <!-- Main Content End-->

    @endsection
@push('js')
    <script>
        function checkBalance(rowId) {

            var balance = Number($('#balance').val());
            var deposit_amount = Number($('#usa_amount'+rowId).text());
                if(balance >= deposit_amount){
                    return true;
                }
                else{
                    alert('You Do not Have Sufficient Balance To Deposit. Please Add Balance to Your Wallet!!'  );
                    return false;
                }
        }



    </script>
@endpush
