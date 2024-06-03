@extends('admin.layouts.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Member List</h1>
                </div>
                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.student.add')))
                <div class="col-sm-6">
                    <a href="{{ route('admin.student.add') }}" class="btn btn-info float-right">Add New</a>
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
                            @php
                                $route = Route::currentRouteName();
                            @endphp
                            {{-- <form action="{{ route('admin.student.list') }}" method="get" class="form-inline mb-2">
                              <div class="form-group mx-sm-3 mb-2">
                                <select name="department" id="department" class="form-control">
                                  <option value="">--Select Department--</option>
                                  {{-- @foreach ($departments as $department)
                                    @isset($_GET['department'])
                                      <option value="{{ $department->id }}" @if($_GET['department'] == $department->id) selected @endif>{{ $department->name }}</option>
                                    @else
                                      <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endisset
                                  @endforeach --}}
                            {{-- </select> --}}
                            {{-- </div>
                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                          </form> --}}
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    @if ($route == 'admin.student.unactive')

                                        <th>Payment Number</th>
                                        <th>Payment Option</th>
                                        <th>Transaction Number</th>
                                    @else
                                        <th>Phone</th>
                                        <th>Picture</th>
                                        <th>Balance</th>
                                    @endif
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if (count($students) > 0)
                                    @foreach ($students as $key => $student)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $student->first_name }} <br> {{ $student->last_name }} ({{$student->refer_code}})</td>

                                            <td>{{ $student->email }}</td>

                                            @if ($route == 'admin.student.unactive')
                                                <td>{{ $student->payment_number }}</td>
                                                <td>{{ $student->payment_method }}</td>
                                                <td>{{ $student->transaction_id }}</td>

                                            @else

                                                <td>{{ $student->phone }}</td>
                                                <td>
                                                    <img src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" alt="student image" width="100px" height="100px">
                                                </td>
                                                <td>${{ $student->bonus }}</td>
                                            @endif
                                            <td>
                                                @if ($student->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.student.edit')))
                                                <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                                                @endif
                                                @if(Auth::user()->role_type == 'admin' || (Auth::user()->role_type == 'staff' && findStaffPermission('admin.student.delete')))
                                                <a href="{{ route('admin.student.delete', $student->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                                    @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <!--<td colspan="9" class="text-center">No Member found</td>-->
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
