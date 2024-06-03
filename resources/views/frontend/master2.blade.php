<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->site_icon }}" type="image/x-icon">
    <title>{{ getSetting()->site_name }}</title>

   @include('frontend.member.include.style')

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
{{--    <div id="loader"></div>--}}

    @include('frontend.member.include.header')

   @include('frontend.member.include.sidenavbar')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
    </div>



</div>

@include('frontend.member.include.script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
@stack('js')

</body>
</html>
