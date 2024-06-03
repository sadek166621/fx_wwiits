@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Activation List</h1>
      </div>
      <div class="col-sm-6">
        {{-- <a href="{{ route('admin.assigned.add') }}" class="btn btn-info float-right">Add New</a> --}}
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-none">
            <div class="card card-body">
                <form action="" id="filterForm">

                    <div class="row mb-3">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="member_id" class="form-control-label">Member ID</label>
                                <input type="number" name="member_id" id="member_id" class="form-control" placeholder="Enter Member ID">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="submit" onclick="$('#filterForm').submit()" class="btn btn-primary form-control" style="margin-top:31px"><i class="fa fa-filter"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Activation Code Genarate By</th>
                  <th>Member ID</th>
                  <th>Activation Code Used By</th>
                  <th>Member ID (Used By)</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
              @if (count($members) > 0)
                  @foreach ($members as $key => $member)
                  @php
                        $gnte = App\Models\Admin\Student::where('id', $member->code_user_id)->get();
                        // dd($gnte);
                  @endphp

                   @foreach ( $gnte as $gnt )
                   <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $gnt->first_name }}</td>
                    <td>{{ $gnt->refer_code }}</td>
                    <td>{{ $member->first_name }}</td>
                    <td>{{ $member->refer_code }}</td>
                    <td>{{ $member->created_at }}</td>

                  </tr>
                   @endforeach
                  @endforeach
                @else
                    <td colspan="10" class="text-center">No teacher found</td>
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
