@extends('frontend.master2')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Update Password</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('password.change.submit') }}" method="POST">
                        @csrf
                        <!--<input type="hidden" name="_token"-->
                        <!--    value="#">-->
                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">Old
                                    Password</label>
                                <input type="password" name="old_password" value=""
                                       class="form-control" placeholder="Old Password">
                            </div>
                            <div class="col-md-12 mb-30">
                                <label class="font-medium font-15 color-heading">New
                                    Password</label>
                                <input type="password" name="new_password" minlength="6"
                                       maxlength="12" value="" class="form-control"
                                       placeholder="New Password">
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit"
                                    class="btn btn-primary font-15 fw-bold">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @endsection
