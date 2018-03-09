<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Best hotel in Da Nang</title>

		<!-- Google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

		<!-- font awesome -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- bootstrap -->
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

		<!-- uniform -->
		<link type="text/css" rel="stylesheet" href="{{ asset('assets/uniform/css/uniform.default.min.css') }}">

		<!-- animate.css -->
		<link rel="stylesheet" href="{{ asset('assets/wow/animate.css') }}">

		<!-- gallery -->
		<link rel="stylesheet" href="{{ asset('assets/gallery/blueimp-gallery.min.css') }}">

		<!-- favicon -->
		<link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
		<link rel="icon" href="images/logo2.png" type="image/x-icon">

		<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
	</head>
	<body id="home">
		<form class="navbar-form navbar-left newsletter" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Enter Your Email Id Here">
			</div>
			<button type="submit" class="btn btn-inverse">Subscribe</button>
		</form>
		@include('users.blocks.menu')
		@yield('content')
		@include('users.blocks.footer')

		<script src="{{ asset('assets/jquery.js') }}"></script>

		<!-- wow script -->
		<script src="{{ asset('/assets/wow/wow.min.js') }}"></script>

		<!-- uniform -->
		<script src="{{ asset('assets/uniform/js/jquery.uniform.js') }}"></script>

		<!-- boostrap -->
		<script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}" type="text/javascript" ></script>

		<!-- jquery mobile -->
		<script src="{{ asset('assets/mobile/touchSwipe.min.js') }}"></script>

		<!-- jquery mobile -->
		<script src="{{ asset('assets/respond/respond.js') }}"></script>

		<!-- gallery -->
		<script src="{{ asset('assets/gallery/jquery.blueimp-gallery.min.js') }}"></script>

		<!-- custom script -->
		<script src="{{ asset('assets/script.js') }}"></script>
	</body>
</html>
