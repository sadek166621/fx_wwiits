@extends('admin.layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Become Instructor List</h1>
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

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Account Type</th>
                    <th>Professional Title</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Bio</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($becomeins)>0)
                    @foreach ($becomeins as $key=> $becomein)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $becomein->b_first_name }}</td>
                        <td>{{ $becomein->b_last_name }}</td>
                        <td>
                            @if ($becomein->b_account_type == 1)
                             <span>Instructor</span>
                            @elseif ($becomein->b_account_type == 2)
                            <span>Organization</span>
                            @endif
                        </td>
                        <td>{{ $becomein->b_professional_title }}</td>
                        <td>{{ $becomein->b_phone_number }}</td>
                        <td>{{ $becomein->b_address }}</td>
                        <td>{{ $becomein->b_bio }}</td>
                        <td>
                            @if ($becomein->status == 1)
                            <span class="badge bg-success">Active</span>
                          @else
                            <span class="badge bg-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <a href="{{ route('b-instrustor.delete',$becomein->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</a>
                        </td>
                      </tr>
                    @endforeach
                    @else
                    <td colspan="10" class="text-center">No BecomeIns found</td>
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
