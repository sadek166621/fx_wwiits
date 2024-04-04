@extends('admin.layouts.master')
@section('content')

 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Course View</h1>
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
                <style>
                    table, th, td {
                      border: 1px solid black;
                      border-collapse: collapse;
                    }
                    th, td {
                      padding: 5px;
                      text-align: left;
                    }
                </style>

                <table style="width:100%" class="table table-bordered table-striped">
                    <tr>
                      <th>Course Name</th>
                      <td>{{ $course->course_name }}</td>
                    </tr>
                    <tr>
                      <th>Instrustor Name</th>
                      <td>{{ $course->teacher->name }}</td>
                    </tr>
                    <tr>
                      <th>Department</th>
                      <td>{{ $course->department->name }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="{{ asset('assets') }}/images/uploads/courses/{{ $course->image }}" alt="Course image" width="100px" height="100px">
                        </td>
                    </tr>
                      <tr>
                        <th>Overview</th>
                        <td>{{ $course->overview }}</td>
                    </tr>
                    <tr>
                        <th>curriculum</th>
                        <td>{{ $course->curriculum }}</td>
                    </tr>
                    <tr>
                        <th>Discussion</th>
                        <td>{{ $course->discussion }}</td>
                    </tr>
                    <tr>
                        <th>Review</th>
                        <td>{{ $course->review }}</td>
                    </tr>
                    <tr>
                        <th>Course_Duration</th>
                        <td>{{ $course->course_duration }}</td>
                    </tr>
                    <tr>
                        <th>Course_level</th>
                        <td>{{ $course->course_level }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $course->price }}</td>
                    </tr>
                    <tr>
                        <th>Discount_price</th>
                        <td>{{ $course->discount_price }}</td>
                    </tr>
                    <tr>
                        <th>Video_link</th>
                        <td><a href="{{ $course->vedio_link }}">Link</a></td>
                    </tr>
                    <tr>
                        <th>Comments</th>
                        <td>{{ $course->comments }}</td>
                    </tr>
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
