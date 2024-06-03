@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Payment Options Settings</h1>
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
          <form action="{{ route('admin.payment.update', $setting->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Bkash</label>
                <input type="text" name="bkash" class="form-control" id="exampleInputEmail1" placeholder="Enter Credential" value="{{ $setting->bkash }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Rocket</label>
                <input type="text" name="rocket" class="form-control" id="exampleInputEmail1" placeholder="Enter Credential" value="{{ $setting->rocket }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nagad</label>
                <input type="text" name="nagad" class="form-control" id="exampleInputEmail1" placeholder="Enter Credential" value="{{ $setting->nagad }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Skrill</label>
                <input type="text" name="skrill" class="form-control" id="exampleInputEmail1" placeholder="Enter Credential" value="{{ $setting->skrill }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Binance</label>
                <input type="text" name="binance" class="form-control" id="exampleInputEmail1" placeholder="Enter Credentials" value="{{ $setting->binance }}" required>
              </div>
              <div class="form-group">
                <label for="address">Visa Card</label>
                  <input type="text" name="visa_card" class="form-control" id="exampleInputEmail1" placeholder="Enter Credentials" value="{{ $setting->visa_card }}" required>
              </div>
              <div class="form-group">
                <label for="google_map_link">Perfect Money (Memo-UXXXX)</label>
                <input type="text" name="perfect_money" class="form-control" id="google_map_link" placeholder="Enter Credentials" value="{{ $setting->perfect_money }}" required>
              </div>
              <div class="form-group">
                <label for="youtube_video_left_link">Netter</label>
                <input type="text" name="neteller" class="form-control" id="youtube_video_left_link" placeholder="Enter Credentials" value="{{ $setting->neteller }}" required>
            </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Save Changes</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
  </div>
</section>
<!-- /.content -->
@endsection

