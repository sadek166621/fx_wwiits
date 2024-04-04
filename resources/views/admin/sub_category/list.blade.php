@extends('admin.layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sub_Category List</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('admin.sub_category.add') }}" class="btn btn-info float-right">Add New</a>
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
                    <th>Category Name</th>
                    <th>Sub_Cat Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($sub_categories)>0)
                     @foreach ($sub_categories as $key=> $sub_category)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $sub_category->subcategory->name}}</td>
                        <td>{{ $sub_category->sub_name }}</td>
                        <td>
                            @if ($sub_category->status == 1)
                            <span class="badge bg-success">Active</span>
                          @else
                            <span class="badge bg-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <a href="{{ route('admin.sub_category.edit',$sub_category->id) }}" class="btn btn-info"><i class="fas fa-trash"></i> Edit</a>
                          <a href="{{ route('admin.sub_category.delete',$sub_category->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    @else
                    <td colspan="10" class="text-center">No sub_category found</td>
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
