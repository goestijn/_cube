<!DOCTYPE html>
<html>

	<head>
	
		<title></title>

		<!-- LIBS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('libs/admin/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('libs/admin/font-awesome/css/font-awesome.css') }}">

		<!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/admin/fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/layout.css') }}">

	</head>

	<body>

		<header id="header">

            <nav class="navbar navbar-toggleable-xl navbar-inverse bg-inverse">

                <div class="navbar-nav mr-auto">
                    <button class="navbar-toggler" data-toggle="sidebar"><i class="fa fa-bars"></i><span class="sr-only">Menu</button>
                    <a class="navbar-brand mr-auto" href="#">Cube 9</a>
                </div>

                <ul class="navbar-nav mr-right">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="xl-icon fa fa-user"></i></a>
                         <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">My account</h6>
                            <a href="/admin/users/profile" class="dropdown-item"><i class="dropdown-menu-icon-left fa fa-id-card-o"></i>Profile</a>
                            <a href="/admin/logout" class="dropdown-item"><i class="dropdown-menu-icon-left fa fa-power-off"></i>Logout</a>
                        </div>
                    </li>
                </ul>

            </nav>

        </header>


        <main id="main">

            <aside id="sidebar">
                <ul class="navbar-nav">
                	<!--<li class="nav-item"><a class="nav-link" href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>Shop</a>
                        <div class="collapse">
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="/admin/users">Brands</a></li>
                                <li class="nav-item"><a class="nav-link" href="/admin/users/create">Categories</a></li>
                                <li class="nav-item"><a class="nav-link" href="/admin/users/create">Products</a></li>
                                <li class="nav-item-seperator"></li>
                                <li class="nav-item"><a class="nav-link" href="/admin/users/create">Orders</a></li>
                                <li class="nav-item"><a class="nav-link" href="/admin/users/create">Retours</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-users"></i>Users</a></li>-->
                </ul>
           	</aside>

            <content id="content">

                @yield('content')

            </content>    

        </main>

		<script src="{{ asset('libs/admin/jquery/js/jquery.js') }}"></script>
		<script src="{{ asset('libs/admin/tether/js/tether.js') }}"></script>
		<script src="{{ asset('libs/admin/bootstrap/js/bootstrap.js') }}"></script>

		<script>

			/*----------------------------------------------------------
                SIDEBAR
            -----------------------------------------------------------*/
            $.fn.sidebar = function() {

                var self = this;
                var trigger = $('button[data-toggle="sidebar"]');

                $(trigger).on('click', function(e) {

                    e.preventDefault();

                    if ($(self).hasClass('toggled')) {

                        $(trigger).removeClass('active');
                        $(self).removeClass('toggled');

                    } else {

                        $(trigger).addClass('active');
                        $(self).addClass('toggled');

                    }

                });


                $(self).find('.collapse').prev('a').on('click', function(e) {

                    e.preventDefault();

                    if ($(this).hasClass('active')) {

                        $(this).next('.collapse').collapse('hide');
                        $(this).removeClass('active');

                    } else {

                        $(this).next('.collapse').collapse('show');
                        $(this).addClass('active');

                    }

                });

            }

            $('#sidebar').sidebar();

		</script>

	</body>

</html>