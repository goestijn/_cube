<!DOCTYPE html>
<html>

	<head>
	
		<title></title>

		<link rel="stylesheet" type="text/css" href="{{ asset('libs/admin/bootstrap/css/bootstrap.css') }}">

	</head>

	<body>
		
		<div class="container">
			
			@yield('content')
		
		</div>

		<script src="{{ asset('libs/admin/jquery/js/jquery.js') }}"></script>
		<script src="{{ asset('libs/admin/tether/js/tether.js') }}"></script>
		<script src="{{ asset('libs/admin/bootstrap/js/bootstrap.js') }}"></script>

	</body>

</html>