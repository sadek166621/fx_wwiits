@extends('admin.layouts.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card card-body">
                        <form action="" id="filterForm">

                            <div class="row mb-3">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="member_id" class="form-control-label">Member ID</label>
                                        <input type="number" name="member_id" id="member_id" class="form-control" placeholder="Enter Member ID"
                                               value="@isset($_GET['member_id']){{$_GET['member_id'] > 0  ? $_GET['member_id']:''}}@endisset">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <button type="submit" onclick="$('#filterForm').submit()" class="btn btn-primary form-control" style="margin-top:31px"><i class="fa fa-filter"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1>Deposit List</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Member Name</th>
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
                                            <td>{{ $item->member->first_name ?? '' }} {{ $item->member->last_name ?? '' }}
                                                <br>({{$item->member->refer_code ?? '' }})</td>
                                            <td>{{ $item->package->package_name ?? '' }}</td>
                                            <td><span id="usa_amount{{$key}}">${{ $item->amount }}</span></td>
                                            {{-- <td>
                                                {{$interval->format('%a')*$item->package->profit}}
                                            </td> --}}
                                            <td>
                                                ${{ $item->profit_amount }}
                                            </td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif($item->status == 0)
                                                    <span class="badge bg-warning">On Hold</span>
                                                    <br>
                                                    <a class="text-warning" data-toggle="modal" data-target="#reasonModal{{$item->id}}" style="font-size: 12px; cursor:pointer;">See Details</a>
                                                @else
                                                    <span class="badge bg-danger">Rejected</span>
                                                @endif

                                                    <!-- Modal -->
                                            </td>
                                            <td class="text-center btn-group">
                                                <a class="btn btn-primary mx-2" @if($item->status != 1 )onclick="setStatus(1, {{$item->id}})" @endif><i class="fa fa-check-circle" ></i>Activate</a>
                                                <a class="btn btn-warning" @if($item->status == 1) onclick="setStatus(0, {{$item->id}})" data-toggle="modal" data-target="#exampleModal{{$item->id}}" @endif {{$item->status == 1 ? '':'disabled'}}><i class="fa fa-pause"></i> Hold</a>

                                            </td>
                                        </tr>
                                        <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Holding Reason</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('admin.deposit.request.change-status')}}" id="changeStatusForm_{{$item->id}}" method="post">

                                                        <div class="modal-body">
                                                                @csrf
                                                                <input type="hidden" name="id" id="" value="{{$item->id}}">
                                                                <input type="hidden" name="status" id="status{{$item->id}}" value="">
                                                                <div class="row mb-3">
                                                                    <label for="" class="form-control-label">Reason</label>
                                                                    <input type="text" name="comment" class="form-control" id="comment" required>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="reasonModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="reasonModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Holding Reason</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{$item->comment}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div


                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center"><strong class="text-danger">No Deposits Found</strong></td>
                                    </tr>
                                @endif

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- modal description -->
    <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollmodalLabel">Notice Description</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="noticeDetailsWrapper">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal description -->
@endsection
@push('js')
    <script>
        function setStatus(val, id) {
            alert(val);
            $('#status'+id).val(val);
            if(val == 1){
                $('#comment').prop('required', false);
                $('#changeStatusForm_'+id).submit();
            }
            else if(val == 0) {
                alert('fund');
                $('#comment').prop('required', true);
            }

        }
    </script>
@endpush
