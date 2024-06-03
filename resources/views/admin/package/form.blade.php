@extends('admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
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
      <div class="col-sm-6">

        <h1>@isset($item)Edit @else Add New @endisset Package</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="@isset($item){{ route('admin.package.update', $item->id) }}@else{{ route('admin.package.store') }}@endisset"
                      method="post" onsubmit="return checkReturnPart()">
                    @csrf
                    @php $settings = getSetting() ;
                    @endphp
                    <input type="hidden" name="" id="conversion_rate" value="{{$settings->conversion_rate}}">
                    {{-- <input type="hidden" name="profit_rate" id="profit_rate" value="{{$settings->profit_rate}}"> --}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Package Name <span class="text-danger">*</span></label>
                            <input type="text" name="package_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Package Name" @isset($item) value="{{ $item->package_name }}" @else value="{{old('package_name')}}" @endisset required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Package Type <span class="text-danger">*</span></label>
                            <select name="package_type" id="" class="form-control" required>
                                <option value="">Select Package Type</option>
                                <option value="1" @isset($item){{$item->package_type == 1 ? 'selected':''}}@endisset>Forex Deposit</option>
                                {{--                      <option value="2" @isset($item){{$item->package_type == 2 ? 'selected':''}}@endisset>Select Package Type</option>--}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Deposit Amount (Dollars) <span class="text-danger">*</span></label>
                            <input type="text" name="usa_amount" class="form-control" id="usa_amount" placeholder="Enter Amount in Dollar" @isset($item) value="{{ $item->usa_amount }}" @else value="{{old('usa_amount')}}" @endisset required>
                        </div>
                        {{-- <div class="form-group">
                          <label for="exampleInputEmail1">Deposit Amount (BD)</label>
                          <input type="text" name="bd_amount" class="form-control" id="bd_amount" placeholder="" @isset($item) value="{{ $item->bd_amount }}" @else value="{{old('bd_amount')}}" @endisset readonly>
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Profit Rate (%) <span class="text-danger">*</span></label>
                            <input type="text" name="profit_rate" class="form-control" id="profit_rate" placeholder="" @isset($item) value="{{ $item->profit_rate }}" @else value="{{old('profit_rate')}}" @endisset required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Profit</label>
                            <input type="text" name="profit" class="form-control" id="profit" placeholder="" @isset($item) value="{{ $item->profit }}" @else value="{{old('profit')}}" @endisset readonly>
                        </div>
                        @isset($item)
                            @php
                                $referral_bonus = getReferralBonus($item->id);
                                $affiliate_bonus = getAffiliateBonus($item->id);
                                $return = getReturns($item->id);
                            @endphp
                        @endisset
                        <div class="form-group">
                            <h4 style="font-weight: bold" >Instant Deposit Bonus</h4>
                            <label for="exampleInputEmail1">First Generation <span class="text-danger">*</span></label>
                            <input type="text" name="ref_bonus_first_gen" class="form-control mb-2" id="profit" placeholder="" @isset($item) value="{{ $referral_bonus->first_gen }}" @else value="{{old('first_gen')}}" @endisset required>
                            <label for="exampleInputEmail1">Second Generation <span class="text-danger">*</span></label>
                            <input type="text" name="ref_bonus_second_gen" class="form-control mb-2" id="profit" placeholder="" @isset($item) value="{{ $referral_bonus->second_gen }}" @else value="{{old('second_gen')}}" @endisset required>
                            <label for="exampleInputEmail1">Third Generation <span class="text-danger">*</span></label>
                            <input type="text" name="ref_bonus_third_gen" class="form-control mb-2" id="profit" placeholder="" @isset($item) value="{{ $referral_bonus->third_gen }}" @else value="{{old('third_gen')}}" @endisset required>
                        </div>
                        <div class="form-group">
                            <h4 style="font-weight: bold">Affiliate Deposit Profit</h4>
                            <label for="exampleInputEmail1">First Generation <span class="text-danger">*</span></label>
                            <input type="text" name="aff_bonus_first_gen" class="form-control mb-2" id="profit" placeholder="" @isset($item) value="{{ $affiliate_bonus->first_gen }}" @else value="{{old('first_gen')}}" @endisset required>
                            <label for="exampleInputEmail1">Second Generation <span class="text-danger">*</span></label>
                            <input type="text" name="aff_bonus_second_gen" class="form-control mb-2" id="profit" placeholder="" @isset($item) value="{{ $affiliate_bonus->second_gen }}" @else value="{{old('second_gen')}}" @endisset required>
                            <label for="exampleInputEmail1">Third Generation <span class="text-danger">*</span></label>
                            <input type="text" name="aff_bonus_third_gen" class="form-control mb-2" id="profit" placeholder="" @isset($item) value="{{ $affiliate_bonus->third_gen }}" @else value="{{old('third_gen')}}" @endisset required>
                            <label for="exampleInputEmail1">Fourth Generation <span class="text-danger">*</span></label>
                            <input type="text" name="aff_bonus_fourth_gen" class="form-control mb-2" id="profit" placeholder="" @isset($item) value="{{ $affiliate_bonus->fourth_gen }}" @else value="{{old('fourth_gen')}}" @endisset required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maturity Time (Days) <span class="text-danger">*</span></label>
                            <input type="number" name="maturity_time" class="form-control" id="maturity_time" placeholder="" @isset($item) value="{{ $item->maturity_time }}" @else value="{{old('maturity_time')}}" @endisset required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Maturity Gift (%) <span class="text-danger">*</span></label>
                            <input type="text" name="maturity_gift" class="form-control" id="maturity_gift" placeholder="" value="@isset($item){{ $item->maturity_gift }}@else{{old('maturity_gift')}}@endisset"  required>
                        </div>
                        <div class="form-group">
                            <h4 style="font-weight: bold">Deposit Return</h4>
                            @for($i = 0; $i<5; $i++)
                                <div class="row" style="margin: 0">
                                    {{--                                <h6>First Return<span class="text-danger">*</span></h6>--}}
                                    <div class="col-md-6 me-5">
                                        <div class="row">
                                            <label class="col-md-3" for="exampleInputEmail1">Day<span class="text-danger">*</span></label>
                                            <input type="number" name="day[]" class="form-control col-md-9 mb-2" id="profit" placeholder="" @isset($return) value="{{ $deposit_returns[$i]->day }}" @else value="{{old('day')}}" @endisset required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-md-4" for="exampleInputEmail1">Return<span class="text-danger">*</span></label>
                                            <input type="text" name="return[]" class="form-control col-md-8 mb-2" id="profit" placeholder="" @isset($return) value="{{ $deposit_returns[$i]->return }}" @else value="{{old('return')}}" @endisset required>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Minimum Withdrawal Amount (%)</label>--}}
{{--                            <input type="number" name="minimum_withdraw_amount" class="form-control" placeholder="" @isset($item) value="{{ $item->minimum_withdraw_amount }}" @else value="{{old('minimum_withdraw_time')}}" @endisset >--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Terms and Conditions</label>
                            <textarea name="terms" class="form-control">@isset($item){{ $item->terms }}@endisset</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Deposit Return Policy</label>
                            <textarea name="deposit_return_policy" class="form-control">@isset($item){{ $item->deposit_return_policy }}@endisset</textarea>
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
    <!-- /.content -->
</div>
@endsection
@push('js')
    <script>
        $('#profit_rate').keyup(function () {
            var usa_amount = Number($('#usa_amount').val());
            if(usa_amount){
                var convertion_rate = Number($('#conversion_rate').val());
                var profit_rate = Number($('#profit_rate').val());

                var bd_amount = usa_amount * convertion_rate;
                bd_amount = bd_amount.toFixed(4);

                var profit_amount = ((usa_amount * profit_rate)/100);
                profit_amount = profit_amount.toFixed(4);

                $('#bd_amount').val(bd_amount);
                $('#profit').val(profit_amount);
            }
            else{
                $('#bd_amount').val(0);
                $('#profit').val(0);
            }
        })
    </script>
    <script>
        $('#usa_amount').keyup(function () {
            var usa_amount = Number($('#usa_amount').val());
            if(usa_amount){
                var convertion_rate = Number($('#conversion_rate').val());
                var profit_rate = Number($('#profit_rate').val());

                var bd_amount = usa_amount * convertion_rate;
                bd_amount = bd_amount.toFixed(4);

                var profit_amount = ((usa_amount * profit_rate)/100);
                profit_amount = profit_amount.toFixed(4);

                $('#bd_amount').val(bd_amount);
                $('#profit').val(profit_amount);
            }
            else{
                $('#bd_amount').val(0);
                $('#profit').val(0);
            }
        })
    </script>
    <script>
        function checkReturnPart(){
            var day = $("input[name='day[]']")
                .map(function(){return $(this).val();}).get();
            var deposit_return = $("input[name='return[]']")
                .map(function(){return $(this).val();}).get();
            var day_sum = 0;
            var return_sum = 0;
            $.each(day, function(key,value){
                day_sum+= Number(value);
            })
            $.each(deposit_return, function(key,value){
                return_sum+= Number(value);
            })
            console.log('Total Days: '+day_sum);
            console.log('Total Return: '+return_sum);
            if((day_sum > $('#maturity_time').val()) || return_sum > 100){
                alert('Total Return Days or Return Amount Invalid')
                return false;
            }

        }
    </script>

@endpush
