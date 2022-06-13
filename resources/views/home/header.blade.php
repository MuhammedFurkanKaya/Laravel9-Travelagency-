<!--<link rel="stylesheet" type="text/css" href="{{ url('menuubar.css') }}" /> -->
<style>
    .dropdown-menu-custom {
        opacity: 0;
        visibility: hidden;
        position: absolute;
        top: 100px;
        left: 0;
        background: #fff;
        transition: all 300ms;
        transform: scale(0);
    }

    .dropdown-menu-custom li {
        padding: 20px 10px;
        width: 150px;
        transition: all 300ms;
    }

    .dropdown-menu-custom li:hover {
        background: #9ed034;
    }

    .dropdown-menu-custom li:hover .dropdown-item-custom {
        color: #fff;
    }

    .dropdown-item-custom {
        width: 100%;
        line-height: 16px !important;
        transition: all 300ms;
    }

    .open-dropdown {
        position: relative;
    }

    .open-dropdown:hover .dropdown-menu-custom {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
    }

</style>




<div class="site-header">
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-10">
                    <div class="logo">
                        <a href="http://127.0.0.1:8000/">
                            <img src="{{asset('assets')}}/images/logo.png" alt="travel html5 template" title="travel html5 template">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-8 col-sm-6 col-xs-2">
                    <div class="main-menu">
                        <ul class="visible-lg visible-md">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>

                            <li class="open-dropdown">
                                <a href="#">Tour</a>
                                <ul class="dropdown-menu-custom">
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/1">Historical Places</a></li>
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/2">Balkan Trip</a></li>
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/3">Mediterranean Tour</a></li>
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/4">Blue Tour</a></li>
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/5">Ski Tour</a></li>
                                </ul>
                            </li>
                            <li class="open-dropdown">
                                <a href="#">Ticket</a>
                                <ul class="dropdown-menu-custom">
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/6">Flight Ticket</a></li>
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/7">Bus Ticket</a></li>
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/8">Train Ticket</a></li>
                                    <li><a class="dropdown-item-custom" href="http://127.0.0.1:8000/packages/9">Ship Ticket</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('references')}}">References</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                        </ul>
                        <a href="#" class="toggle-menu visible-sm visible-xs">
                            <i class="fa fa-bars"></i>
                        </a>
                        @auth()
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <strong class="text-uppercase">{{Auth::user()->name}} <i class="fa fa-caret-down"></i></strong>

                        </div>
                            <a href="/logoutuser" class="text-uppercase">Logout</a>
                        @endauth
                        @guest
                        <a href="/loginuser" class="text-uppercase">Login</a> / <a href="/registeruser" class="text-uppercase">Join</a>
                        @endguest
                        <ul class="dropdown-menu">
                            <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user-o"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i>My Reservation</a></li>
                            <li><a href="{{route('userpanel.reviews')}}"><i class="fa fa-exchange"></i>My Reviews</a></li>
                            <li><a href="#"><i class="fa fa-check"></i>Checkout</a></li>
                            <li><a href="#"><i class="fa fa-unlock-alt"></i>My Packages</a></li>
                            <li><a href="/logout"><i class="fa fa-user-plus"></i>Logout</a></li>
                        </ul>

                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.main-header -->
        <div class="row">
            <div class="col-md-12 visible-sm visible-xs">
                <div class="menu-responsive">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                    </ul>
                </div> <!-- /.menu-responsive -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.site-header -->
<!--<a href="/">My Account</a> -->

