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
                <h1>Balance Transfer History</h1>
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
                                <th>Transferred By/ Member ID</th>
                                <th>Amount</th>
                                <th>Transferred To</th>
                                <th>Date</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if (count($items) > 0)
                            @foreach ($items as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->tranferredFrom->first_name ?? '' }} {{ $item->tranferredFrom->last_name ?? '' }} <br>{{ $item->tranferredFrom->refer_code ?? ''}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{ $item->member->first_name ?? '' }} {{ $item->member->last_name ?? '' }} <br>{{ $item->member->refer_code ?? ''}}</td>
                                <td>{{ date('Y-m-d H:i:s', strtotime($item->created_at)) }} </td>
                            </tr>
                            @endforeach
                            @else
                            <td colspan="5" class="text-center">No Balance Transfer found</td>
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
        function setStatus(val) {
            $('#status').val(val);
            if(val == 1){
                $('#changeStatusForm').submit();
            }
        }

    </script>
@endpush
