@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Deposit Bonus List</h1>
      </div>
{{--       <div class="col-sm-6">--}}
{{--        <a href="{{ route('admin.deposit-bonus.add') }}" class="btn btn-info float-right">Add New</a>--}}
{{--      </div>--}}
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
                  <th>Title</th>
                  <th>Generation</th>
                  <th>Bonus</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($items) > 0)
                  @foreach ($items as $key => $item)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->generation }}</td>
                      <td>{{$item->bonus_type == 2 ? '$':''}}{{ $item->amount }} {{$item->bonus_type == 1 ? '%':''}}</td>
                      <td>
                        @if ($item->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                          @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.deposit-bonus.edit')))
                            <a href="{{ route('admin.deposit-bonus.edit', $item->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                          @endif
                          @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.deposit-bonus.delete')))
                            <a href="{{ route('admin.deposit-bonus.delete', $item->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                          @endif
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No deposit-bonus Added</td>
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
