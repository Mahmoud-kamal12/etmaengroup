@section('css')
<style>
    .logo-style {
        width: 100% !important
    }
</style>
@endsection
<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="{{url(route('admin/index'))}}"><img class="blur-up lazyloaded logo-style" src="{{asset('front/assets/img/logo-2.png')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">

        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset(auth()->guard('admin')->user()->photo)}}" alt="#">
            </div>
            <h6 class="mt-3 f-14"></h6>
            <p>general manager.</p>
        </div>

        <ul class="sidebar-menu">

            <li><a class="sidebar-header" href="{{url(route('admin/index'))}}"><i data-feather="home"></i><span>لوحه التحكم</span></a></li>

            @if(auth()->user()->is_teacher == 0)

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>المشرفين</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admins/index'))}}"><i class="fa fa-circle"></i>المشرفين</a></li>
                        <li><a href="{{url(route('admins/create'))}}"><i class="fa fa-circle"></i>اضافه مشرف</a></li>
                    </ul>
                </li>

                <!-- <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الصلاحيات</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/roles/index'))}}"><i class="fa fa-circle"></i>الصلاحيات</a></li>
                        <li><a href="{{url(route('admin/roles/create'))}}"><i class="fa fa-circle"></i>اضافه صلاحيه</a></li>
                    </ul>
                </li> -->

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>المدربين</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/teachers/index'))}}"><i class="fa fa-circle"></i>المدربين</a></li>
                        <li><a href="{{url(route('admin/teachers/create'))}}"><i class="fa fa-circle"></i>اضافه مدرب</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>المتدربين</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/users/index'))}}"><i class="fa fa-circle"></i>المتدربين</a></li>
                        <!-- <li><a href="{{url(route('admin/users/create'))}}"><i class="fa fa-circle"></i>اضافه متدرب</a></li> -->
                    </ul>
                </li>

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الاسئله</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/questions/index'))}}"><i class="fa fa-circle"></i>الاسئله</a></li>
                        <li><a href="{{url(route('admin/questions/create'))}}"><i class="fa fa-circle"></i>اضافه سؤال</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الأخبار</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/news/index'))}}"><i class="fa fa-circle"></i>الأخبار</a></li>
                        <li><a href="{{url(route('admin/news/create'))}}"><i class="fa fa-circle"></i>اضافه خبر</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الدورات</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/products/index'))}}"><i class="fa fa-circle"></i>الدورات</a></li>
                        <li><a href="{{url(route('admin/products/create'))}}"><i class="fa fa-circle"></i>اضافه دوره</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الاشتراكات</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/bookings/index'))}}"><i class="fa fa-circle"></i>الاشتراكات</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الاستبيان والملف التعريفي</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/questionnaires/index'))}}"><i class="fa fa-circle"></i>الاستبيان والملف التعريفي</a></li>
                    </ul>
                </li>

                <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الملفات</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url(route('admin/galleries/index'))}}"><i class="fa fa-circle"></i>الملفات</a></li>
                        <li><a href="{{url(route('admin/galleries/create'))}}"><i class="fa fa-circle"></i>اضافه ملف</a></li>
                    </ul>
                </li>

            @endif

            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>المجموعات</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{url(route('admin/classes/index'))}}"><i class="fa fa-circle"></i>المجموعات</a></li>
                    <li><a href="{{url(route('admin/classes/create'))}}"><i class="fa fa-circle"></i>اضافه مجموعه</a></li>
                </ul>
            </li>

            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>الاعدادات</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{url(route('admin/settings/index'))}}"><i class="fa fa-circle"></i>الاعدادات</a></li>
{{--                    <li><a href="{{url(route('admin/settings/create'))}}"><i class="fa fa-circle"></i>إضاقة</a></li>--}}
                </ul>
            </li>

            <li><a class="sidebar-header" href="{{url(route('admin/logout'))}}"><i data-feather="log-in"></i><span>Logout</span></a></li>

        </ul>
    </div>
</div>
<!-- Page Sidebar end-->
