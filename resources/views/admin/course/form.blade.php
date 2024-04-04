@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Course</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

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
          <form action="@isset($course){{ route('admin.course.update', $course->id) }}@else{{ route('admin.course.store') }}@endisset"method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="col-sm-12">
                {{-- <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Course Name</label>
                     <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Course Name" @isset($course) value="{{ $course->course_name }}"@endisset required>
                    </div>
                </div> --}}
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                        <label for="department_id">Department</label>
                        <select class="form-control" name="department_id" id="department_id" required>
                          <option value="">--Select Course--</option>
                          @foreach ($departments as $department)
                            @isset($course)
                              <option value="{{ $department->id }}" @if($department->id == $course->department_id) selected @endif>{{ $department->name }}</option>
                            @else
                              <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endisset
                          @endforeach
                        </select>
                    </div>
                  </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instructor Name</label>
                    <select name="teacher_id" class="form-control">
                        <option value="">--Select Instructor Name--</option>
                        {{-- <option value="1" @isset($course) @if($course->name == 1) selected @endif @endisset>Tanmay</option> --}}
                        @foreach ( $teachers as $teacher )
                        <option value="{{ $teacher->id }}"@isset($course)@if($course->teacher_id == $teacher->id ) selected @endif @endisset >{{ $teacher->name }}</option>
                        @endforeach

                    </select>
                  </div>
                </div>
             </div>

             <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                        @isset($course)<img src="{{ asset('assets') }}/images/uploads/courses/{{ $course->image }}" alt="course image" height="100px" width="100px"><br/> @endisset
                     <label for="exampleInputFile">@isset($course) Change course Image @else Choose course Image @endisset</label>
                     <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="form-control" @isset($course) @else required @endisset>
                        </div>
                     </div>
                    </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Overview</label>
                    <input type="text" name="overview" class="form-control" id="exampleInputEmail1" placeholder="Enter Overview" @isset($course) value="{{ $course->overview }}"@endisset>
                  </div>
                </div>
             </div>
             <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Curriculum</label>
                     <input type="text" name="curriculum" class="form-control" id="exampleInputEmail1" placeholder="Enter curriculum" @isset($course) value="{{ $course->curriculum }}"@endisset>
                    </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Discussion</label>
                    <input type="text" name="discussion" class="form-control" id="exampleInputEmail1" placeholder="Enter Discussion" @isset($course) value="{{ $course->discussion }}"@endisset>
                  </div>
                </div>
             </div>
             <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Review</label>
                     <input type="text" name="review" class="form-control" id="exampleInputEmail1" placeholder="Enter Review" @isset($course) value="{{ $course->review }}"@endisset>
                    </div>
                </div>
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Course_Duration</label>
                     <input type="text" name="course_duration" class="form-control" id="exampleInputEmail1" placeholder="Course_Duration" @isset($course) value="{{ $course->course_duration }}"@endisset>
                    </div>
                </div>
             </div>
             <div class="col-sm-12">

                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course_level</label>
                    <input type="text" name="course_level" class="form-control" id="exampleInputEmail1" placeholder="Enter Course_level" @isset($course) value="{{ $course->course_level }}"@endisset>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Price</label>
                     <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" @isset($course) value="{{ $course->price }}"@endisset required>
                     </div>
                </div>
             </div>
             <div class="col-sm-12">

                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Discount_price</label>
                    <input type="number" name="discount_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Discount_price" @isset($course) value="{{ $course->discount_price }}"@endisset>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Vedio_link</label>
                     <input type="text" name="vedio_link" class="form-control" id="exampleInputEmail1" placeholder="Enter Vedio_link" @isset($course) value="{{ $course->vedio_link }}"@endisset>
                    </div>
                </div>
             </div>
             <div class="col-sm-12">
                <div class="col-sm-12" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Comments</label>
                    <input type="text" name="comments" class="form-control" id="exampleInputEmail1" placeholder="Enter Comments" @isset($course) value="{{ $course->comments }}"@endisset>
                  </div>
                </div>
             </div>

            </div>
            <div class="form-check">
                <input type="checkbox" name="status" class="" id="exampleCheck1" @isset($student) @if($student->status == 1) checked @endif @else checked @endisset >
                <label class="form-check-label" for="exampleCheck1">Active</label>
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
