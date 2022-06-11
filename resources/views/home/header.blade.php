<div class="site-header">
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-10">
                    <div class="logo">
                        <a href="#">
                            <img src="{{asset('assets')}}/images/logo.png" alt="travel html5 template" title="travel html5 template">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-6 col-xs-2">
                    <div class="main-menu">
                        <ul class="visible-lg visible-md">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>

                            <li><a href="events.html">Events</a></li>
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
                            <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user-o"></i>My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i>My Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i>My Compare</a></li>
                            <li><a href="#"><i class="fa fa-check"></i>Checkout</a></li>
                            <li><a href="#"><i class="fa fa-unlock-alt"></i>Login</a></li>
                            <li><a href="/logout"><i class="fa fa-user-plus"></i>Create an Account</a></li>
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

