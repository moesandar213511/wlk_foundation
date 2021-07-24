<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Site Icons -->
<link rel="shortcut icon" href="{{url('images/wlk_foundation.jpg')}}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{url('images/apple-touch-icon.png')}}">

	<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<!-- Custom & Default Styles -->
<link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('user/css/carousel.css')}}">
<link rel="stylesheet" href="{{asset('user/css/style.css')}}">
<link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('user/css/carousel.css')}}">
<link rel="stylesheet" href="{{asset('user/css/bootstrap-select.css')}}">
<link rel="stylesheet" href="{{asset('user/owlcaro/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('user/owlcaro/assets/owl.theme.default.min.css')}}">
{{-- //Toastr --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
<![endif]-->
        <!-- font -->
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=pyidaungsu' />
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
     <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d78eb4dab6f1000123c8846&product=inline-share-buttons" async="async"></script>
    <style>
        .myanmar{
            font-family:Pyidaungsu;
        }
        .owl-prev,.owl-next{
            color: #000!important;
            border-radius: 100%!important;
        }
        .owl-prev *,
        .owl-next *{
            margin-top: 7px;
        }
        .owl-prev:hover,
        .owl-next:hover {
            color: #fff!important;
        }
        .magnifier a i{
            margin-top: 15px;
        }
    </style>
</head>
@yield('css')
<body>
	{{-- <div class="Loader"></div> --}}
	<div id="wrapper">
      {{-- @include('user.site_user.header_user') --}}
    @include('user.site_user.navbar')

      @yield('content')

	@include('user.site_user.footer_user')
	</div><!-- end wrapper -->

	<!-- jQuery Files -->
	<script src="{{asset('user/js/jquery.min.js')}}"></script>
	<script src="{{asset('user/js/gallery_04.js')}}"></script>
	<script src="{{asset('user/js/masonry.js')}}"></script>
	<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('user/js/parallax.js')}}"></script>
	<script src="{{asset('user/js/animate.js')}}"></script>
	<script src="{{asset('user/js/owl.carousel.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>
    <script src="{{asset('user/owlcaro/owl.carousel.min.js')}}"></script>

	{{-- //Toastr --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
@yield('js')
</body>
</html>