@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Sign Up Referal Bonus List</h1>
      </div>
      {{-- <div class="col-sm-6">
        <a href="{{ route('admin.referal-bonus.add') }}" class="btn btn-info float-right">Add New</a>
      </div> --}}
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
            <form action="{{ route('admin.referal-bonus.update', $bonus->id) }}" method="post">
                @csrf
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Type</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                @if (count($bonus) > 0)--}}
                        {{--                  @foreach ($bonus as $key => $bonus)--}}
                        {{--                    <tr>--}}
                        {{--                      <td>{{ $key+1 }}</td>--}}
                        {{--                      <td>{{ $bonus->key }}</td>--}}
                        {{--                      <td>{{ $bonus->amount }} $</td>--}}
                        {{--                      <td>--}}
                        {{--                        @if ($bonus->status == 1)--}}
                        {{--                          <span class="badge bg-success">Active</span>--}}
                        {{--                        @else--}}
                        {{--                          <span class="badge bg-danger">Inactive</span>--}}
                        {{--                        @endif--}}
                        {{--                      </td>--}}
                        {{--                      <td>--}}
                        {{--                        <a href="{{ route('admin.referal-bonus.edit', $bonus->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>--}}
                        {{--                        <a href="{{ route('admin.referal-bonus.delete', $bonus->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>--}}
                        {{--                      </td>--}}
                        {{--                    </tr>--}}
                        {{--                  @endforeach--}}
                        {{--                @else--}}
                        {{--                    <td colspan="8" class="text-center">No referal-bonus found</td>--}}
                        {{--                @endif--}}
                        @for($i=0; $i<4; $i++)
                            @if($i== 0)
                                @php $generation = 'first_gen' @endphp
                            @elseif($i== 1)
                                @php $generation = 'second_gen' @endphp
                            @elseif($i== 2)
                                @php $generation = 'third_gen' @endphp
                            @else
                                @php $generation = 'fourth_gen' @endphp
                            @endif
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{Str::title(str_replace('_', ' ', $generation)) }}</td>
                                <td>@if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.referal-bonus.update')))
                                    <input type="text" name="{{$generation}}" class="form-control" value="{{ $bonus->$generation }}" required>
                                    @else
                                        {{ $bonus->$generation }}
                                    @endif
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                    @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.referal-bonus.update')))
                    <div class="text-right  my-2"><button type="submit" href="" class="btn btn-primary">Update</button></div>
                    @endif
                </div>
            </form>

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
