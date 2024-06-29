@extends('frontend.master2')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card table-responsive">
                <div class="card-header">
                    <h3>My Packages</h3>
                </div>
                <div class="card-body">
                    <table class="table ">
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
                                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">Deposit</a>
                                            <!-- Button trigger modal -->
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            I agree with the terms and conditions of {{ getSetting()->site_name ?? ''}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Deposit Package</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

{{--                                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                <div class="modal-dialog" role="document">--}}
{{--                                                    <div class="modal-content" style="position: relative;top: 84px;">--}}
{{--                                                        <div class="modal header">--}}
{{--                                                            --}}{{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
{{--                                                            <button type="button" class="btn-close mx-3" data-bs-dismiss="modal" aria-label="Close">--}}

{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            <input type="checkbox" required > Lorem ipsum dolor sit, amet consectetur adipisicing elit. In harum nihil blanditiis eum corrupti, sunt cupiditate beatae odio tempora doloremque laborum ullam autem, consequatur dicta, vero minima reprehenderit quis! Nobis.--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="submit" class="btn btn-primary mb-3 mx-4 float-right">Submit</button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
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
