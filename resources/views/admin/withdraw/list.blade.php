@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Withdraw Request List</h1>
      </div>
      <div class="col-sm-6">
        {{-- <a href="{{ route('admin.item.add') }}" class="btn btn-info float-right">Add New</a> --}}
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
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Member Name</th>
                  <th>Withdraw From</th>
                  <th>Withdraw Option</th>
                  <th>Account Num</th>
                  <th>Amount</th>
                  <th>Req Date</th>
                  <th>Status</th>
                    @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.withdraw.edit')))
                  <th>Action</th>
                    @endif
                </tr>
              </thead>
              <tbody>
                @if (count($withdrawal) > 0)
                  @foreach ($withdrawal as $key => $item)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>
                        <img src="{{ asset('assets') }}/images/uploads/students/{{ $item->member->image }}" alt="student image" width="100px" height="100px">
                      </td>
                      <td>{{ $item->member->first_name }}</td>
                      @if ($item->withdraw_type == 1)
                      <th>Package :{{ $item->package->package_name }} </th>
                      @else
                      <th> My Wallet</th>
                      @endif
                      <td>{{ $item->withdraw_option }}</td>
                      <td>{{ $item->account_number }}</td>
                      <td>${{ $item->amount }}</td>
                      <td>{{ $item->created_at }}</td>

                      <td>
                        @if ($item->status == 1)
                          <span class="badge bg-success">Success</span>
                        @else
                          <span class="badge bg-danger">Pending</span>
                        @endif
                      </td>
                        @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.withdraw.edit')))
                      <td>
                        @if ($item->status == 0)

                        <a href="{{ route('admin.withdraw.edit', $item->id) }}" class="btn btn-info" onclick="if(!confirm('Are You Want To Change The Status?'))return false"><i class="fas fa-clock"></i></a>

                        @else
                        <a href="" class="btn btn-success" ><i class="fas fa-clock"></i></a>

                        @endif
                        {{-- <a href="{{ route('admin.withdraw.delete', $item->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?'))return false"><i class="fas fa-trash"></i> </a> --}}
                      </td>
                        @endif
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No item found</td>
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
@endsection
