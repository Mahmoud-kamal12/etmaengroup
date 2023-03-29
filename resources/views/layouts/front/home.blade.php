<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <!--Responsive needs & IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit= no" />
    <meta http-equiv="X-UA-compatible" content="ie=edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <!-- --------------- FOR IE9 below ----------------->
    <!--[if lt IE 9]-->
    <!--script(src="js/respond.min.js")-->
    <!--[endif]-->
    <!--Site description -->
    <meta name="keyword" content="مركز اطمأن للاستشارات الإدارية والتدريب" />
    <meta name="author" content="Etolv.com" />
    <meta name="description" content="مركز اطمأن للاستشارات الإدارية والتدريب" />
    <!-- meta(http-equiv="refresh", content="0; url=index.html")-->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <!--Windows phone-->
    <meta content="#" name="msapplication-navbutton-color" />
    <meta name="msapplication-TileImage" content="معهد اطمئن" />
    <!-- Chrome, Firefox OS and Opera-->
    <meta content="#" name="theme-color" />
    <!--Apple-->
    <link rel="apple-touch-icon" href="{{asset('front/img/data/logo.jpg')}}" />
    <!--Open graph protocol Facebook integration-->
    <meta property="og:site_name" content="Etmaen" />
    <meta property="og:url" content="https://etmaengroup.com" />
    <meta property="og:locale" content="ar_KSA" />
    <meta property="og:description" content="معهد اطمئن للتدريب واللغات و الإرشاد الأسرى" />
    <meta property="og:title" content="Etmaen group" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://etmaengroup.com/assetsfront/img/data/logo.jpg" />
    <!-- <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" /> -->
    <!--Twitter integration-->
    <meta name="twitter:card" content="معهد اطمئن للتدريب و اللغات والإرشاد الأسرى" />
    <meta name="twitter:title" content="Etmaen" />
    <meta name="twitter:image" content="{{asset('front/img/data/logo.jpg')}}" />
    <meta name="twitter:description" content="معهد اطمئن للتدريب و اللغات والإرشاد الأسرى" />
    <meta name="generator" content="Powered by Etolv.com" />
    <link rel="icon" href="{{asset('front/img/data/logo.jpg')}}">
    <link rel="shortcut icon" href="{{asset('front/img/data/logo.jpg')}}">
    <meta name="language" content="Arabic" />
    <link rel="canonical" href="https://etmaengroup.com/" />
    <meta name="robots" content="index, follow" />
    <meta content="en" http-equiv="content-language" />
    <meta content="text/html;charset=UTF-8" http-equiv="content-type" />
    <meta content="text/javascript" http-equiv="content-script-type" />
    <meta content="text/css" http-equiv="content-style-type" />
    <meta name="copyright" content="Copyright 2020 https://etmaengroup.com , Inc." />
    <meta property="article:published_time" content="2020-12-01T00:00:00+01:00" />
    <meta property="article:section" content="Personal Section" />
    <meta property="article:tag" content="مركز اطمأن للاستشارات الإدارية والتدريب" />
    <meta name="image" content="{{asset('frontfront/img/data/logo.jpg')}}" />
    <meta name="twitter:creator" content="" />
    <meta name="twitter:image:src" content="{{asset('frontfront/img/data/logo.jpg')}}" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="etolv.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('front/css/bootstrap.rtl.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/owl.carousel.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/flaticon.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/rtl.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('front/css/color/color-default.css')}}" />
    <title> معهد اطمئن </title>

    @yield("css-custom")

</head>

<body data-bs-spy="scroll" data-bs-offset="70" data-bs-terget="#home">
    @csrf
    <!-- Page Header Start-->
    @include('layouts.front.navbar')
    <!-- Page Header Ends -->

    @yield('content')

    <!-- footer start-->
    @include('layouts.front.footer')
    <!-- footer end-->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.thumbs.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.parallax-scroll.js')}}"></script>
    <script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('front/js/wow.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/js/waypoints.min.js')}}"></script>
    <script src="{{asset('front/js/active.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    <script src="https://js.pusher.com/7.1/pusher.min.js"></script>
    @if(auth()->user())
        <script>
            var _token = $('input[name="_token"]').val();
            let user__id = <?php echo auth()->user()->id; ?>;
            $.ajax({
                url: "{{ route('get/student/new/notifications') }}",
                method: "get",
                data: {
                    _token: _token,
                },
                success: function(data) {
                    if (data.length > 0) {
                        document.getElementById("pending_notification").innerHTML = data
                    } else if (data.length === 0) {
                        document.getElementById("pending_notification").innerHTML = 0
                    }
                }
            })
        </script>
        <script>
            $(document).ready(function() {

                $(document).on('click', '#notification_icon', function() {
                    let records = ``
                    var _token = $('input[name="_token"]').val();
                    load_data(_token);
                    function load_data(_token) {
                        $.ajax({
                            url: "{{ route('get/student/notifications') }}",
                            method: "get",
                            data: {
                                _token: _token,
                            },
                            success: function(data) {
                                if (data.length > 0) {
                                    for (let i = 0; i < data.length; i++) {
                                        records += `
                                            <div class="notification">
                                                <div class="fw-bold">تم اضافه ملف جديد</div>
                                                <div>
                                                    <a href="<?php echo route('get/student/file', '') ?>/${data[i].id}">اضغط للتحميل</a>
                                                </div>
                                            </div>
                                            <hr>
                                            `
                                    }
                                    document.getElementsByClassName(`pending_user_${user__id}`)[0].innerHTML = Number(0);
                                    document.getElementsByClassName(`notification_student_${user__id}`)[0].innerHTML += records;
                                    // document.getElementById('load_more_button_notifi').innerHTML = Number(0);
                                    $('#load_more_button_notifi').attr('data-notifi-count', data.length);
                                }else{
                                    $('#load_more_button_notifi').attr('data-notifi-count', 0);
                                }
                            }
                        })
                    }
                });

                $(document).on('click', '#load_more_button_notifi', function() {
                    let records = ``
                    var _token = $('input[name="_token"]').val();
                    var dataCount = parseInt($(this).attr('data-notifi-count'));
                    load_data(dataCount, _token);
                    function load_data(dataCount, _token) {
                        $.ajax({
                            url: "{{ route('get/student/notifications/get-more') }}",
                            method: "get",
                            data: {
                                dataCount: dataCount,
                                _token: _token,
                            },
                            success: function(data) {
                                if (data.length > 0) {
                                    for (let i = 0; i < data.length; i++) {
                                        records += `
                                            <div class="notification">
                                                <div class="fw-bold">تم اضافه ملف جديد</div>
                                                    <div>
                                                        <a href="<?php echo route('get/student/file', '') ?>/${data[i].id}">اضغط للتحميل</a>
                                                    </div>
                                            </div>
                                            <hr>
                                            `
                                    }
                                    var notification_btn = document.getElementById('load_more');
                                    console.log(notification_btn);
                                    document.getElementsByClassName(`pending_user_${user__id}`)[0].innerHTML = Number(0);
                                    document.getElementsByClassName(`notification_student_${user__id}`)[0].innerHTML += records;
                                    $('#load_more_button_notifi').attr('data-notifi-count', Number(data.length + dataCount));
                                }else{
                                    let btnNoData = `<button type="button" class="btn btn-info form-control px-2" name="load_more_button_notifi_no_data" data-notifi-count="" id="load_more_button_notifi_no_data">لا يوجد اشعارات اخري</button>`
                                    $('#load_more_button_notifi').remove();
                                    document.getElementById("load_more").innerHTML = btnNoData
                                }
                            }
                        })
                    }
                });
            });
        </script>
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('dfc8ac8682cb7ddaf65d', {
                cluster: 'mt1'
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('notifi-push', function(data) {
                if (data.notifi_id && data.file_id && data.student_id && data.student_id == user__id) {
                    let pending = parseInt(document.getElementsByClassName(`pending_user_${user__id}`)[0].innerText);
                    console.log(pending);
                    if (pending > 0) {
                        document.getElementsByClassName(`pending_user_${user__id}`)[0].innerHTML = Number(pending + 1);
                        notifi_row = `
                                <div class="notification">
                                    <div class="fw-bold">تم اضافه ملف جديد</div>
                                    <div>
                                        <a href="<?php echo route('get/student/file', '') ?>/${data.notifi_id}">اضغط للتحميل</a>
                                    </div>
                                </div>
                                <hr>
                                `;
                        document.getElementsByClassName(`notification_student_${user__id}`)[0].innerHTML += notifi_row
                    }
                }
            });
        </script>
    @endif
    @yield('script')
</body>
</html>
