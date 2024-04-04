@extends('admin.layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Course List</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('admin.course.add') }}" class="btn btn-info float-right">Add New</a>
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

              <table id="" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Course Name</th>
                    <th>Instrustor Name</th>
                    <th>Department Name</th>
                    <th>Image</th>
                    <th>Course_Duration</th>
                    <th>Price</th>
                    <th>Discount Price</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @if (count($courses)>0)
                    @foreach ($courses as $key=> $course )
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->teacher->name }}</td>
                        <td>{{ $course->department->name }}</td>
                        <td>
                            <img src="{{ asset('assets') }}/images/uploads/courses/{{ $course->image }}" alt="Course image" width="100px" height="100px">
                        </td>
                        <td>{{ $course->course_duration }}</td>

                        <td>{{ $course->price }}</td>
                        <td>{{ $course->discount_price }}</td>

                        <td>
                            @if ($course->status == 1)
                            <span class="badge bg-success">Active</span>
                          @else
                            <span class="badge bg-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <a href="{{ route('admin.course.edit',$course->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                          <a href="{{ route('admin.course.delete', $course->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                          <a href="{{ route('admin.course.view', $course->id) }}" class="btn btn-success"><i class="fas fa-eye"></i> View</a>
                        </td>
                      </tr>
                    @endforeach
                  @else
                  <tr>
                    <td colspan="10" class="text-center">No student found</td>
                    </tr>
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
