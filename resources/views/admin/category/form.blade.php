@extends('admin.layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category-Add</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form action="@isset($categories){{ route('admin.category.update',$categories->id) }}@else
            {{ route('admin.category.store') }}@endisset"method="POST">
              @csrf
              <div class="card-body">
                <div class="col-sm-12">
                  <div class="col-sm-12" style="float: left">
                      <div class="form-group">
                       <label for="exampleInputEmail1">Name</label>
                       <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" @isset($categories) value="{{ $categories->name }}"@endisset required>
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

@endsection
