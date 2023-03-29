    <!-- Page Header Start-->
    <div class="site-preloader-wrap">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <div id="home" class="navbar">
        <div class="container" style="display: block">
            <div class="row">
                <div class="col-md-7 col-lg-7" style="display: flex;justify-content: start;align-items: center;">
                    <div><!--class="address-bar"-->
                        <ul class="list-inline">
                            <li>
                                <a class="navbar-brand logo m-2" href="/">
                                    <img src="{{asset('front/img/data/12.jpeg')}}" style="width: 80px;transform: scale(1.3);margin-top: 0px;margin-bottom: 0px;" alt="Logo"/>
                                </a>
                            </li>
                            <li class="px-2" style="margin-top: 12.5px;">
                                مجموعه اطمئن
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5" style="display: flex;justify-content: end;align-items: center;">
                    <div class="social-icons">
                        <ul class="list-inline">
                            @if(Auth::user())
                            <li class="settings mx-5">
                                <!-- <a href="https://elearning.etmaengroup.com/login/index.php" id="login__anchor">تسجيل الدخول</a> --><!--Don't Delete This-->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="width: max-content;">
                                        {{Auth::user()->name}}
                                    </a>
                                    <div class="dropdown-menu position-fixed">
                                        <a class="dropdown-item" href="/course/Mycourses">الدروس المشترك</a>
                                        <!-- <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#MyAccount">حسابى</a> -->
                                        <a class="dropdown-item" href="/logout">تسجيل خروج</a>
                                    </div>
                                </div>
                            </li>
                            @else
                            <!-- <li>
                                <a href="https://www.instagram.com/etmaengroup/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/etmaencenter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=0558302830&text= اكتب رسالتك هنا لاطمئن">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li> -->
                            <li class="settings">
                                <!-- <a href="https://elearning.etmaengroup.com/login/index.php" id="login__anchor">تسجيل الدخول</a> --><!--Don't Delete This-->
                                <a type="button" class="dropdown-item" style="width: max-content;" href="/login">
                                    تسجيل دخول
                                </a>
                            </li>
                            <li class="settings">
                                <!--<a href="https://elearning.etmaengroup.com/login/signup.php" id="login__anchor">إشتراك </a>--><!--Don't Delete This-->
                                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#MyAccount">إشتراك </a> -->
                                <a type="button" class="dropdown-item" style="width: max-content;" href="{{url(route('user/sign-in'))}}">
                                    إشتراك 
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar  navbar-light navbar-expand-md row">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand logo m-2" href="/">
                <!-- <img src="{{asset('front/img/data/logo.jpg')}}" alt="Logo" /> -->
                <img src="{{asset('front/img/data/10t.png')}}" alt="Logo" style="transform: scale(2);margin-right: 20px;" />
                <!-- <img src="{{asset('front/img/data/logo_2.jpg')}}" alt="Logo 2 " style="margin-right: 20px;" /> -->
                <img src="{{asset('front/img/data/6.png')}}" alt="Logo 2 " style="transform: scale(2);margin-right: 50px;" />
            </a>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item " id="home__page"><a class="nav-link smooths" href="/">الرئيسية</a></li>
                    <li class="nav-item " id="aboutUs__page"><a class="nav-link smooths" href="/about">من نحن</a></li>
                    <li class="nav-item " id="aboutUs__page"><a class="nav-link smooths" href="{{url(route('presentation'))}}">الملف التعريفي </a></li>
                    <li class="nav-item  ourSectionsItem" id="ourSectionsItem"><a class="nav-link smooths" href="#">الاقسام</a>
                        <ul>
                            <li>
                                <a class="nav-link smooths" href="{{route('courses', 1)}}">قسم التدريب</a>
                            </li>
                            <li>
                                <!--<a class="nav-link smooths" href="{{route('courses', 3)}}">مركز الارشاد</a>-->
                            </li>
                            <li>
                                <!--<a class="nav-link smooths" href="{{route('courses', 2)}}">معهد اللغات</a>-->
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ourSectionsItem " id="standards">
                        <a class="nav-link smooths" href="#">المعايير و السياسات</a>
                        <ul style="left:-3px">
                            <li>
                                <a class="nav-link smooths text-wrap" href="/academic_rules">القوانين الاكاديمية </a>
                            </li>
                            <li>
                                <a class="nav-link smooths text-wrap" href="/attendance">سياسة الحضور</a>
                            </li>
                            <li>
                                <a class="nav-link smooths text-wrap" href="/check_activities">قوانين النزاهه</a>
                            </li>
                            <li>
                                <a class="nav-link smooths text-wrap" href="/copyright">حقوق الملكية الفكرية</a>
                            </li>
                            <li>
                                <a class="nav-link smooths text-wrap" href="/privacy_policy">سياسة الخصوصية</a>
                            </li>

                            <li>
                                <a class="nav-link smooths text-wrap" href="/rapporteur_plan">خطة المقرر وأدواته</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ourSectionsItem " id="questionnaire">
                        <a class="nav-link smooths" href="#">الاستبيانات</a>
                        <ul style="left:-3px">
                            <li>
                                <a class="nav-link smooths text-wrap" href="/trainee_questionnaire">استبيان قياس رضا المتدربين </a>
                            </li>
                            <li>
                                <a class="nav-link smooths text-wrap" href="/trainers_questionnaire">استبيان قياس رضا المدربين </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item " id="our_courses"><a class="nav-link smooths" href="/our_courses">مجالات التدريب</a>
                    </li>
                    <li class="nav-item " id="gallery"><a class="nav-link smooths" href="{{url(route('gallery'))}}">معرض الصور</a></li>
                    <li class="nav-item  ourSectionsItem " id="contacts">
                        <a class="nav-link smooths" href="#">التواصل والدعم الفني</a>
                        <ul style="left:-3px">
                            <li>
                                <a class="nav-link smooths text-wrap" href="/#contact">اتصل بنا</a>
                            </li>
                            <li>
                                <a class="nav-link smooths text-wrap" href="/support">الدعم الفني </a>
                            </li>
                            <li>
                                <a class="nav-link smooths text-wrap" href="/complaints_suggestions">الشكاوى والإقتراحات</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item " id="Training_plan"><a class="nav-link smooths" href="/training_plan_trainers">خطة تدريبية للمدربين </a></li>

                    <li class="nav-item " id="TrainingManual"><a class="nav-link smooths" href="/training_manual">دليل التدريب بمنصة اطمئن للتدريب </a></li>
                </ul>
            </div>
            @if(auth()->user())
            <div id="notification_parent">
                <span id="pending_notification" class="btn-danger pending pending_user_{{auth()->user()->id}}"></span>
                <img id="notification_icon" src="{{asset('front/img/notification.svg')}}" alt="notification icon">
                <div id="notification_view" class="">
                    <div class="notification mb-0">
                        <div class="notification_student_{{auth()->user()->id}} new_notification"></div>
                        <div id="load_more">
                            <button type="button" class="btn btn-info form-control px-2" name="load_more_button_notifi" data-notifi-count="" id="load_more_button_notifi">
                                عرض الاشعارات القديمه
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </nav>
    <!-- Page Header Ends -->

    {{-- <div class="modal fade" id="MyAccount" tabindex="-1" aria-labelledby="MyAccount" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="MyAccountLabel">حسابى</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="course_id" name="course_id">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>الاسم رباعى *</label><!--pattern="^[A-Za-z ]{5,}"-->
                                <input type="text" id="name" name="name" class="form-control" required autocomplete="off" placeholder="برجاء كتابة الاسم رباعى">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>رقم الهويه *</label><!--pattern="[0-9a-zA-z]{5,}"-->
                                <input type="text" id="id" name="id_number" class="form-control" required autocomplete="off" placeholder="برجاء كتابة رقم لبهوية السعودى">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>البريد الالكترونى *</label>
                                <input type="text" id="email" name="email" class="form-control" required autocomplete="off" placeholder="برجاء كتابة البريد الالكترونى">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>رقم الجوال *</label><!--pattern="[0-9]{5,}"-->
                                <input type="text" id="phone" name="phone" class="form-control" required autocomplete="off" placeholder="برجاء كتابة رقم الجوال">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>الجنس *</label>
                                <select class="form-control" name="gender">
                                    <option selected disabled>اختار الجنس</option>
                                    <option value="1">ذكر</option>
                                    <option value="2">انثى</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>كلمه المرور *</label>
                                <input type="password" id="password" name="password" class="form-control" required minlength="8">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div> --}}
</div>