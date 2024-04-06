@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($item)Edit @else Add New @endisset Package</h1>
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
          <form action="@isset($item){{ route('admin.package.update', $item->id) }}@else{{ route('admin.package.store') }}@endisset"
            method="post" >
            @csrf
              @php $settings = getSetting() ;
              @endphp
              <input type="hidden" name="conversion_rate" id="conversion_rate" value="{{$settings->conversion_rate}}">
              <input type="hidden" name="profit_rate" id="profit_rate" value="{{$settings->profit_rate}}">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Package Name</label>
                <input type="text" name="package_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Package Name" @isset($item) value="{{ $item->package_name }}" @else value="{{old('package_name')}}" @endisset>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Package Type</label>
                  <select name="package_type" id="" class="form-control" required>
                      <option value="">Select Package Type</option>
                      <option value="1" @isset($item){{$item->package_type == 1 ? 'selected':''}}@endisset>Forex Deposit</option>
{{--                      <option value="2" @isset($item){{$item->package_type == 2 ? 'selected':''}}@endisset>Select Package Type</option>--}}
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Deposit Amount (Dollars)</label>
                <input type="text" name="usa_amount" class="form-control" id="usa_amount" placeholder="Enter Amount in Dollar" @isset($item) value="{{ $item->usa_amount }}" @else value="{{old('usa_amount')}}" @endisset>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Deposit Amount (BD)</label>
                <input type="text" name="bd_amount" class="form-control" id="bd_amount" placeholder="" @isset($item) value="{{ $item->bd_amount }}" @else value="{{old('bd_amount')}}" @endisset readonly>
              </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Profit</label>
                    <input type="text" name="profit" class="form-control" id="profit" placeholder="" @isset($item) value="{{ $item->profit }}" @else value="{{old('profit')}}" @endisset readonly>
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
@push('js')
    <script>
        $('#usa_amount').keyup(function () {
            var usa_amount = Number($('#usa_amount').val());
            if(usa_amount){
                var convertion_rate = Number($('#conversion_rate').val());
                var profit_rate = Number($('#profit_rate').val());

                var bd_amount = usa_amount * convertion_rate;
                bd_amount = bd_amount.toFixed(2);

                var profit_amount = ((bd_amount * profit_rate)/100);
                profit_amount = profit_amount.toFixed(2);

                $('#bd_amount').val(bd_amount);
                $('#profit').val(profit_amount);
            }
            else{
                $('#bd_amount').val(0);
                $('#profit').val(0);
            }
        })
    </script>
@endpush
