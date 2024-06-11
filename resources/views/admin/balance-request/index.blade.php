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
                    <h1>Fund Requests</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                {{--            <div class="col-sm-6">--}}
                {{--                <a href="{{ route('admin.package.add') }}" class="btn btn-info float-right">Add New</a>--}}
                {{--            </div>--}}
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Paid Amount</th>
                                    <th>Payment Method</th>
                                    <th>Account Number</th>
                                    <th>Transaction ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.fund.request.change-status')))
                                        <th>Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($items) > 0)
                                    @foreach ($items as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->member->first_name ?? '' }} {{ $item->member->last_name ?? '' }} <br>({{ $item->member->refer_code ?? ''}})</td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{Str::title($item->payment_method)}}</td>
                                            <td>{{ $item->account_number }} </td>
                                            <td>{{ $item->transaction_id ?? 'N/A' }}</td>
                                            <td>{{ date('Y-m-d H:i:s', strtotime($item->created_at)) }} </td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif($item->status == 0)
                                                    <span class="badge bg-warning">Pending</span>
                                                @else
                                                    <span class="badge bg-danger">Rejected</span>
                                                @endif
                                            </td>
                                            @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.fund.request.change-status')))
                                                <td>
                                                    <a class="btn btn-primary" onclick="setStatus(1, {{$item->id}})"><i class="fas fa-check-circle"></i> Approve</a>
                                                    <a class="btn btn-danger" onclick="setStatus(2, {{$item->id}})" data-toggle="modal" data-target="#exampleModal{{$item->id}}"><i class="fas fa-trash"></i> Reject</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Reason For Rejection</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{route('admin.fund.request.change-status')}}" id="changeStatusForm{{$item->id}}" method="post">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <!-- /.container-fluid -->

                                                                        <input type="hidden" name="id" id="" value="{{$item->id}}">
                                                                        <input type="hidden" name="status" id="status{{$item->id}}" value="">
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-12 form-group">
                                                                                <label for="" class="form-control-label">Reason</label>
                                                                                <textarea
                                                                                    name="comment" id="reason" cols="30" rows="10" class="form-control" required></textarea>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" id="rejectBtn" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="9" class="text-center">No Request found</td>
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

    </section>
@endsection
@push('js')
    <script>
        function setStatus(val, id) {
            $('#status'+id).val(val);
            if(val == 1){
                $('#changeStatusForm'+id).submit();
            }
        }

    </script>
@endpush
