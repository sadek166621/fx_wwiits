@extends('admin.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@isset($student)
                            Update Member
                        @else
                            Add New Member
                        @endisset</h1>
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
                        <form action="@isset($student){{ route('admin.student.update', $student->id) }}@else{{ route('admin.student.store') }}@endisset"
                              method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6" style="float: left">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" @isset($student) value="{{ $student->first_name }}" @endisset >
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="float: left">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" @isset($student) value="{{ $student->last_name }}" @endisset >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-6" style="float: left">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Father's Name</label>
                                                <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" placeholder="Enter father's Name" @isset($student) value="{{ $student->father_name }}" @endisset >
                                            </div>
                                        </div>
                                        <div class="col-sm-6" style="float: left">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mother's Name</label>
                                                <input type="text" name="mother_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Mother's Name" @isset($student) value="{{ $student->mother_name }}" @endisset >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6" style="float: left">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" @isset($student) value="{{ $student->phone }}" @endisset >
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="float: left">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" @isset($student) value="{{ $student->email }}" @endisset required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="float: left">
                                        <div class="form-group">

                                            <label for="exampleInputFile">@isset($student) Change Member Image @else Choose Member Image @endisset</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="form-control" @isset($student) @else required @endisset> <br>

                                                </div>

                                            </div>
                                            @isset($student)
                                                @if($student->image != null)
                                                    <img src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" alt="Member image" width="100px" height="100px"><br/>
                                                @endif
                                            @endisset
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="float: left">
                                        <div class="form-group">

                                            <label for="exampleInputFile">@isset($student) Change Voter Id Card @else Choose Voter Id Card @endisset</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="form-control" @isset($student) @else required @endisset><br>

                                                </div>

                                            </div>
                                            @isset($student)
                                                @if($student->voter_id_card != null)
                                                    <img src="{{ asset('assets') }}/images/uploads/{{ $student->voter_id_card }}" alt="Voter Id Card" width="100px" height="100px"><br/>
                                                @endif
                                            @endisset
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password " >
                                </div>
                                </div>
                                    <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password Confirmation</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1" placeholder="Enter Password Confirmation " >
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-check @if(isset($student) && $student->has_approved == 1) d-none @endif" >
                                            <input type="checkbox" name="has_approved" class="form-check-input" id="exampleCheck2" @isset($student) @if($student->has_approved == 1) checked @endif @else checked @endisset>
                                            <label class="form-check-label" for="exampleCheck1">Approve</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($student) @if($student->status == 1) checked @endif @else checked @endisset>
                                            <label class="form-check-label" for="exampleCheck1">Active</label>
                                        </div>
                                    </div>
                                </div>


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
