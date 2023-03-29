    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">

            <div class="main-header-left d-lg-none w-auto">
                <div class="logo-wrapper"><a href="#"><img class="blur-up lazyloaded" src="{{asset('admin/assets/images/dashboard/favicon.png')}}"></a></div>
            </div>

            <div class="mobile-sidebar w-auto">
                <div class="media-body text-end switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div> 

            <div class="nav-right col">

                <ul class="nav-menus">

                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>

                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{asset(auth()->guard('admin')->user()->photo)}}" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="{{url(route('admins/info', auth()->guard('admin')->user()->id))}}"><i data-feather="user"></i>Edit Profile</a></li>
                            <!-- <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                            <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i data-feather="settings"></i>Settings</a></li> -->
                            <li><a href="{{url(route('admin/logout'))}}"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>

                </ul>

                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->