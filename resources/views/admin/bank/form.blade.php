@extends('admin.layouts.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@isset($item) Edit @else Add New @endisset Bank</h1>
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
                        <form action="@isset($item){{ route('admin.bank.update', $item->id) }}@else{{ route('admin.bank.store') }}@endisset"
                              method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bank Name</label>
                                    <input type="text" name="bank_name" class="form-control @error('bank_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Bank Name" @isset($item) value="{{ $item->bank_name }}" @endisset required>
                                    @error('bank_name')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
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
@endsection
