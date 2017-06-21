@extends('admin::layouts.master')


@section('main')

	<main class="main">

            <header class="header">
                
                <div class="navigation-trigger hidden-xl-up" data-action="aside-open" data-target=".sidebar">
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

                    <?php /*<div class="user">

                        <div class="user__info" data-action="navigation-user-sub-toggle">
                            <img class="user__img" src="" alt="">
                            <div>
                                <div class="user__name">{{ Auth::user()->fullname }}</div>
                                <div class="user__email">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="navigation__sub">
                            <ul>
                                <li><a href=""><i class="fa fa-vcard-o"></i>View Profile</a></li>
                                <li><a href="/admin/logout" data-action="logout"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </div>

                    </div>*/ ?>

                    <ul class="navigation">

                        <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>

                        <li class="navigation__sub">
                            <a href="" data-action="navigation-sub-toggle"><i class="fa fa-pencil-square-o"></i> Content</a>
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


@section('script')
    
    <script>

        body.on('click', '[data-action]', function (e) {

            e.preventDefault();

            var $this = $(this);
            var action = $this.data('action');
            var target = '';

            switch (action) {

                /*-------------------------------------------
                    Aside
                ---------------------------------------------*/
                case 'aside-open':

                    target = $this.data('target');
                    $this.addClass('toggled');
                    $(target).addClass('toggled');
                    $('.content, .header').append('<div class="ma-backdrop" data-action="aside-close" data-target='+target+' />');

                    break;


                case 'aside-close':

                    target = $this.data('target');
                    $('[data-action="aside-open"], '+target).removeClass('toggled');
                    $('.content, .header').find('.ma-backdrop').remove();

                    break;

                /*-------------------------------------------
                    Logout 
                ---------------------------------------------*/
                case 'logout':

                    swal({
                        title: 'Do you really want to leave?',
                        text: 'Are you sure you want to sign out from the application?',
                        type: 'question',
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-primary',
                        confirmButtonText: 'Yes, Sign me out',
                        cancelButtonClass: 'btn btn-secondary',
                        cancelButtonText: 'No',
                    }).then(function(){

                        window.location.href = $(e.target).attr('href');
                    
                    });

                    break;

                /*------------------------------------------------
                    Sidebar toggle menu
                -------------------------------------------------*/
                case 'navigation-sub-toggle':

                    $(this).parent().toggleClass('navigation__sub--toggled');
                    $(this).next('ul').slideToggle(250);

                    break;

                case 'navigation-user-sub-toggle':

                    $(this).next().toggleClass('navigation__sub--toggled');
                    $(this).next().children('ul').slideToggle(250);
                    break;

            }

        });

        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        $.post('/admin', {'firstname': 'Stijn', 'lastname' : 'Goethals'});
        
    </script>

    @yield('script')

@endsection