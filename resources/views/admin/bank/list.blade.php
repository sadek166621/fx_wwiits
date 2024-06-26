@extends('admin.layouts.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Bank List</h1>
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
                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.bank.add')))
                            <div class="col-sm-6">
                                <a href="{{ route('admin.bank.add') }}" class="btn btn-info float-right">Add New</a>
                            </div>
                @endif
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
                            <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th width="10%">#SL</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && (findStaffPermission('admin.bank.edit')|| (findStaffPermission('admin.bank.delete')))))
                                    <th>Action</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @if($items)
                                    @foreach($items as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->bank_name }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && (findStaffPermission('admin.bank.edit')|| (findStaffPermission('admin.bank.delete')))))
                                            <td class="">
                                                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.bank.edit')))
                                                    <a href="{{route('admin.bank.edit', $item->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i>Edit</a>
                                                @endif
                                                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.bank.delete')))
                                                    <a href="{{route('admin.bank.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Please Confirm Before Deleting it!!')"><i class="fa fa-trash"></i>Delete</a>
                                                @endif
                                            </td>
                                            @endif
                                        </tr>
                                    @endforeach
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
@push('style')
    @include('admin.includes.styles.datatable')
@endpush

@push('script')
    @include('admin.includes.scripts.datatable')
@endpush
