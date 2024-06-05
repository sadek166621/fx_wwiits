@extends('admin.layouts.master')
@section('content')
 <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h5>${{$fund}}</h5>

            <p>Fund Added</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
           <a href="#" class="small-box-footer d-none">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h5>${{$deposit}}</h5>

            <p>Deposit Amount</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
           <a href="#" class="small-box-footer d-none">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h5>${{$internal_transfer}}</h5>

            <p>Internal Transfer</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
           <a href="#" class="small-box-footer d-none">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h5>${{$withdrawn}}</h5>

            <p>Withdrawn</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
           <a href="#" class="small-box-footer d-none">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h5>{{$members}}</h5>

            <p>Total Members</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
           <a href="#" class="small-box-footer d-none">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h5>65</h5>

            <p>Activation Code Revenue</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
           <a href="#" class="small-box-footer d-none"> <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
      <div class="row" style="height: 100px"></div>
    <!-- /.row -->

  </div><!-- /.container-fluid -->
</section>
@endsection
