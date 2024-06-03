@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Staff Permissions</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
          <form action="{{route('admin.staff.permission.update')}}" method="post">
              @csrf
              <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                              <th>SL</th>
                              <th>Action</th>
                              {{--                  <th>Location</th>--}}
                              {{--                  <th>Desigantion</th>--}}
                              <th>Functionality</th>
                          </tr>
                          </thead>
                          <tbody>
                          @if (count($items) > 0)
                              @foreach ($items as $key => $item)
                                  @php $permission = findPermission($item->id); @endphp
                                  <tr>
                                      <td>{{ $key+1 }}</td>
                                      <td>
                                          <div class="form-check">
                                              <input type="checkbox" name="permission[]" value="{{$item->id}}" class="form-check-input" id="exampleCheck1"
                                                     @if($permission != null) checked @endif >
                                              <label class="form-check-label" for="exampleCheck1">Active</label>
                                          </div>
                                      </td>
                                      <td>{{ Str::title(str_replace('_', ' ', $item->name)) }}</td>
                                  </tr>
                              @endforeach
                          @else
                              <td colspan="10" class="text-center">No Functionality found</td>
                          @endif
                          </tbody>
                      </table>
                  </div>
                  <div class="card-footer">
                      <button type="submit" class="btn btn-primary float-right">Submit</button>
                  </div>
                  <!-- /.card-body -->
              </div>
          </form>

        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
@endsection
