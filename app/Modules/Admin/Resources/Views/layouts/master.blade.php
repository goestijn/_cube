<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- vendors -->
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/admin/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">

        <!-- fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/admin/roboto/font-face.css') }}">

        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">

    </head>

    <body>

        <main class="main">

            <header class="header">
                
                <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                    <div class="navigation-trigger__inner">
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                    </div>
                </div>

                <div class="header__logo">
                    <h1><a href="index.html">Cube 9</a></h1>
                </div>

            </header>

            <aside class="sidebar">

                <div class="scrollbar-inner">

                    <div class="user">

                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="" alt="">
                            <div>
                                <div class="user__name">John Doe</div>
                                <div class="user__email">john.doe@cube-9.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">View Profile</a>
                            <a class="dropdown-item" href="">Settings</a>
                            <a class="dropdown-item" href="">Logout</a>
                        </div>

                    </div>

                    <ul class="navigation">

                        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>

                        <li class="navigation__sub">
                            <a href=""><i class="fa fa-pencil-square-o"></i> Content</a>
                            <ul>
                                <li><a href="hidden-sidebar.html">Pages</a></li>
                                <li><a href="boxed-layout.html">Blog</a></li>
                            </ul>
                        </li>

                        <li><a href="index.html"><i class="fa fa-users"></i> Users</a></li>
                        <li><a href="index.html"><i class="fa fa-gears"></i> Settings</a></li>

                    </ul>

                </div>

            </aside>

            <section class="content">

                @yield('content')

                <footer class="footer hidden-xs-down">
                    
                    <p>© Material Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">

                        <a class="nav-link" href="">Homepage</a>
                        <a class="nav-link" href="">Company</a>
                        <a class="nav-link" href="">Support</a>
                        <a class="nav-link" href="">News</a>
                        <a class="nav-link" href="">Contacts</a>

                    </ul>

                </footer>

            </section>

        </main>

        <!-- vendors -->
        <script src="{{ asset('vendors/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/tether/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/Waves/dist/waves.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendors/admin/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

        <!-- js -->
        <script src="{{ asset('js/admin/actions.js') }}"></script>
        <script src="{{ asset('js/admin/app.js') }}"></script>

    </body>
</html>