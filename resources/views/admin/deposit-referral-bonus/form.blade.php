@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($item) Edit @else Add New @endisset Deposit Bonus Amount</h1>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
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
          <form action="@isset($item){{ route('admin.deposit-bonus.update', $item->id) }}@else{{ route('admin.deposit-bonus.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount name" @isset($item) value="{{ $item->title }}" @endisset>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Generation <span class="text-danger">*</span></label>
                    <select name="generation" id="" class="form-control" required>
                        <option value="">Select Generation</option>
                        @for($i=1; $i<=4; $i++)
                            <option value="{{$i}}" @isset($item){{$item->generation == $i ? 'selected':''}}@endisset>{{$i}}</option>
                        @endfor
                    </select>
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Bonus</label>
                <input type="text" name="amount" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount name" @isset($item) value="{{ $item->amount }}" @endisset required>
              </div>
                <div class="form-group d-none">
                    <label for="exampleInputEmail1">Bonus Type</label>
                    <select name="bonus type" id="" class="form-control">
                        <option value="1" selected>Percent</option>
                        <option value="2">Flat</option>
                    </select>
                </div>
              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($item) @if($item->status == 1) checked @endif @else checked @endisset>
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
