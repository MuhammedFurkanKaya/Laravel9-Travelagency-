<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        {{\Illuminate\Support\Facades\Auth::user()->name}}
                        <br />
                        <a href="/logoutuser" class="text-uppercase" style="color: black">Logout</a>
                    </div>
                </div>

            </li>


            <li>
                <a  href="/admin"><i class="fa fa-home "></i>Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-shopping-cart "></i>Order <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="invoice.html"><i class="fa fa-coffee"></i>New Orders</a>
                    </li>
                    <li>
                        <a href="pricing.html"><i class="fa fa-flash "></i>Accepted Orders</a>
                    </li>
                    <li>
                        <a href="component.html"><i class="fa fa-key "></i>Shipping Orders</a>
                    </li>
                    <li>
                        <a href="social.html"><i class="fa fa-send "></i>Completed Orders</a>
                    </li>




                </ul>
            </li>
            <li>
                <a href="/admin/category"><i class="fa fa-flash "></i>Categories </a>

            </li>

            <li>
                <a href="/admin/packages"><i class="fa fa-ticket "></i>Packages</a>
            </li>
            <li>
                <a href="/admin/comment"><i class="fa fa-comment-o "></i>Comments</a>
            </li>
            <li>
                <a href="{{route('admin.faq.index')}}"><i class="fa fa-question "></i>FAQ</a>
            </li>

            <li>
                <a href="{{route('admin.message.index')}}"><i class="fa fa-mail-forward"></i>Messages</a>
            </li>

            <li>
                <a href="/admin/user"><i class="fa fa-user "></i>Users</a>
            </li>

            <li>
                <a href="/admin/social"><i class="fa fa-instagram "></i>Social</a>
            </li>

            <li>
                <a class="active-menu" href="/admin/setting"><i class="fa fa-edit "></i>Settings</a>
            </li>
        </ul>
    </div>

</nav>
