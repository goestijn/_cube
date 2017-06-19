@extends('admin::layouts.master')


@section('main')

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

@endsection