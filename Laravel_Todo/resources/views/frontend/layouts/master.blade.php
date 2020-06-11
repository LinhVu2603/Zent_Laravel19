<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css')}}" />

    @yield('css')

</head>
<body>
<div class="wrapper">
    @include('frontend.includes.header')
<div class="content-wrapper">
	<div class="content-header">
		@yield('content-header')
	</div>
	<section class="content">
		@yield('content')
	</section>
</div>
	@include('frontend.includes.footer')
</div>

</body>
</html>