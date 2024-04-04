@extends('admin.layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sub-Category-Add</h1>
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
            <form action="@isset($sub_categories){{ route('admin.sub_category.update',$sub_categories->id) }}@else
                {{ route('admin.sub_category.store') }}@endisset"method="POST">
              @csrf
              <div class="card-body">
                <div class="col-sm-12">
                    <div class="col-sm-6" style="float: left">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <select name="category_name" class="form-control">
                            <option value="">--Select Category Name--</option>
                              {{-- <option value="1" @isset($course) @if($course->name == 1) selected @endif @endisset>Tanmay</option>
                              <option value="2" @isset($course) @if($course->name == 2) selected @endif @endisset>Rana</option> --}}
                              @foreach ( $cats as $cat )
                              <option value="{{$cat->id}}">{{$cat->name}}</option>
                              @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6" style="float: left">
                        <div class="form-group">
                         <label for="exampleInputEmail1">Sub_Cat Name</label>
                         <input type="text" name="sub_cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" @isset($sub_categories) value="{{ $sub_categories->sub_name }}"@endisset required>
                        </div>
                      </div>
               </div>
              </div>

              <div class="form-check">
                <input type="checkbox" name="status" class="" id="exampleCheck1" @isset($sub_category) @if($sub_category->status == 1) checked @endif @else checked @endisset>
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
