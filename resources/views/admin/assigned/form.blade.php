@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Assigned</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="@isset($assigned){{ route('admin.assigned.update', $assigned->id) }}@else{{ route('admin.assigned.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="department_id">Department</label>
                    <select class="form-control" name="department_id" id="department_id" required>
                      <option value="">--Select Course--</option>
                      @foreach ($departments as $department)
                        @isset($assigned)
                          <option value="{{ $department->id }}" @if($department->id == $assigned->department_id) selected @endif>{{ $department->name }}</option>
                        @else
                          <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endisset
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="">Teacher</label>
                        <select class="form-control" name="teacher_id" required>
                          <option value="">--Select Teacher--</option>
                          @foreach ($teachers as $teacher)
                            @isset($assigned)
                              <option value="{{ $teacher->id }}" @if($teacher->id == $assigned->teacher_id) selected @endif>{{ $teacher->name }}</option>
                            @else
                              <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @endisset
                          @endforeach
                        </select>
                      </div>
                  </div>
                </div>
              </div>

              <h2 style="text-align: center; text-decoration: underline"> Team Leader Info</h2>
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="t_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" @isset($assigned) value="{{ $assigned->t_name }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="t_email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email address" @isset($assigned) value="{{ $assigned->t_email }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" name="t_phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone " @isset($assigned) value="{{ $assigned->t_phone }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <textarea class="form-control" name="t_address" id="" cols="" rows="">
                    @isset($assigned) {{ $assigned->t_address }} @endisset
                </textarea>
              </div>

              {{-- <div class="form-check">
                <input class="form-check-input" value="1" type="radio" @isset($teacher) @if($teacher->gender == 1) checked @endif @else checked @endisset name="gender" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                 Male Teacher
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="2" type="radio" @isset($teacher) @if($teacher->gender == 2) checked @endif  @endisset name="gender"  id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                  Female Teacher
                </label>
              </div>
              <br> --}}
              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($teacher) @if($teacher->status == 1) checked @endif @else checked @endisset>
                <label class="form-check-label" for="exampleCheck1">Active</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
