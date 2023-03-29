@extends('layouts.front.home')

@section('content')

    @include('flash::message')

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('front/img/slider/cover-header.jpg')}}" class="d-block w-100" alt="slider item">
        </div>
        <div class="carousel-item">
            <img src="{{asset('front/img/slider/cover-header2.jpg')}}" class="d-block w-100" alt="slider item">
        </div>
        <div class="carousel-item">
            <img src="{{asset('front/img/slider/cover-header3.jpg')}}" class="d-block w-100" alt="slider item">
        </div>
        <div class="carousel-item">
            <img src="{{asset('front/img/slider/cover-header4.jpeg')}}" class="d-block w-100" alt="slider item">
        </div>
        <div class="overlay"></div>
    </div>
</div>

<div class="container headingWrapper" data-parallax='{"y" : -300, "smoothness": 20}'>
    <div class="banner-text">
        <h1>مجموعة اطمئن</h1>
        <h3 style="text-align: center;color: white;">للإرشاد الأسري والتدريب واللغات</h3>
        <div class="center-wrap">
        </div>
    </div>
</div>
</div>

<!-- <div class="headingWrapper" style="width:100%;">
    <img src="{{asset('front/img/data/1.png')}}" style="width: 150px;transform: scale(1.5);position: absolute;left: 210px;top: 0px;">
    <img src="{{asset('front/img/data/5.png')}}" style="width: 150px;transform: scale(1.5);position: absolute;left: 360px;top: 0px;">
    <img src="{{asset('front/img/data/6.png')}}" style="width: 150px;transform: scale(1.5);position: absolute;left: 510px;top: 0px;">
    <img src="{{asset('front/img/data/2.png')}}" style="width: 150px;transform: scale(1.5);position: absolute;left: 670px;top: 0px;">
</div> -->

@include('flash::message')

<!-- <h1>test</h1> -->
<section id="picMangger" class="d-flex justify-content-center" style="margin-top: 30px;">
    <img src="{{asset('front/img/data/WhatsApp Image 2023-01-25 at 11.48.19 AM.jpeg')}}" class="mx-4" style="height: 500px;border-radius: 10px;box-shadow: 2px 2px 4px;">
    <div class="mx-4" style="top: -80px;position: relative;" data-parallax='{"y" : 100, "smoothness": 20}'><!---->
        <h2>المدير العام</h2>
        <h2>د. ريما احمد البراهيمي</h2>
        <h4>مستشاره نفسية وأسرية ، تشخيص اضطرابات نفسيه عند الاطفال والكبار ، <br> جلسات علاجية نفسية ، خبرة أكثر من ٢٠ سنة في المجال النفسي ، لقاءات تلفزيونية واذاعية</h4>
    </div>
</section>

<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <a href="https://etmaengroup.com/courses/1">
                    <div class="single-feature">
                        <div class="glyph"><img src="{{asset('front/img/data/3.png')}}" style="transform: scale(2);width: 40%;"></div>
                        <h3>برامج تدريبية</h3>
                        <p>معهد اطمئن يقدم خدمات تدريبية معتمدة من المؤسسة العامة للتدريب التقني والمهني</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="https://family-guidance.etmaengroup.com/courses/3">
                    <div class="single-feature">
                        <div class="glyph"><img src="{{asset('front/img/data/7.png')}}" style="transform: scale(2);width: 40%;"></div>
                        <h3>الاستشارات</h3>
                        <p>مركز اطمئن للإستشارات النفسية والاسريه</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="https://languages.etmaengroup.com/courses/2">
                    <div class="single-feature">
                        <div class="glyph"><img src="{{asset('front/img/data/شعار اطمئن للغات..png')}}" style="transform: scale(2);width: 40%;"></div>
                        <h3>معهد اطمئن للغات</h3>
                        <p>يقدم برامج في جميع اللغات منها الانجليزية والفرنسية والاسبانيه والالمانية والصينيه معتمدة من وزارة التعليم</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="feature-area">
    <h1>جهات الاعتماد</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="single-feature">
                    <div class="glyph">
                        <img src="{{asset('front/img/data/2.png')}}" style="transform: scale(2);width: 40%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-feature">
                    <div class="glyph">
                        <img src="{{asset('front/img/data/6.png')}}" style="transform: scale(2);width: 40%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-feature">
                    <div class="glyph">
                        <img src="{{asset('front/img/data/5.png')}}" style="transform: scale(2);width: 40%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-feature">
                    <div class="glyph">
                        <img src="{{asset('front/img/data/1.png')}}" style="transform: scale(2);width: 40%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>


<!-- <div class="container"> -->
<div class="row">
    <div class="col-lg-12 col-md-12 all-post">
        <div class="center-wrap">
            <div class="button">
                <a href="/level_test">حدد مستواك الآن مجاناً <i class="fa fa-long-arrow-right"></i></a>
                <div class="mask"></div>
            </div>
        </div>
    </div>
</div>
</div>
<hr>
<section class="languagesPage">
    <h1>احدث البرامج التدريبية</h1>
    <section class="allCourses">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                @if(isset($LastCourses))
                    @foreach($LastCourses as $course)
                    <div class="col mb-4">
                        <a href="{{route('course/details', $course->id)}}">
                            <div class="card">
                                <img src="{{asset($course->photo)}}" class="card-img-top" alt="English_beginners">
                                <div class="card-body">
                                    <h5 class="card-title">{{$course->title}}</h5>
                                    <div class="courseDescription">
                                        <div class="hours">{{$course->duration}}</div>
                                        <div class="price">{{$course->price}} ر.س </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</section>
<section id="team" class="our-team 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 news-head">
                <h3>آخر الاخبار</h3>
            </div>
        </div>
        <div class="row">
            <div class="team-slides">
                @foreach($LastNews as $news)
                <div class="news-box">
                    <img src="{{$news->photo}}" alt="Image Description" />
                    <div class="box-content">
                        <h4 class="title">{{$news->title}}</h4>
                        <div class="new-details">{{$news->description}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="video-area card m-3">
    <div class="diplay-table">
        <div class="display-table-cell video_container">
            <div class="video-inner-content intro_video">
                <dive class="card-header">
                    <h3>طريقة التسجيل في الموقع </h3>
                </dive>

                <video class="card-body m-2 p-2" controls>
                    <source src="{{asset('front/videos/EtmaanVideo.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-area 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h2>ابق على تواصل </h2>
                    <span class="section-title-bg">Contact</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="address-area text-center">
                    <div class="addess">
                        <h4>العنوان</h4>
                        <p>المملكة العربية السعودية - ينبع - طريق الملك خالد</p>
                    </div>
                    <div class="email">
                        <h4>الايميل</h4>
                        <a href="mailto:info@etmaengroup.com">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                        <p>info@etmaengroup.com</p>
                    </div>
                    <div class="phone">
                        <h4>الهاتف</h4>
                        <a href="tel:0143256046">
                            <i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>
                            <p>0143256046 </p>
                        </a>

                        <!-- <a href="https://api.whatsapp.com/send?phone=0558302830&text= اكتب رسالتك هنا لاطمئن">
                            <i class="fa fa-whatsapp fa-2x"></i>
                            <p style="margin-bottom: 0px;padding:0px">رقم تواصل معهد اللغات</p>
                            <p>0558302830</p>
                        </a> -->

                        <!-- <a href="tel:0562856191">
                            <i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>
                            <p>0562856191</p>
                        </a> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8">
                <div class="contact-form">
                    <form id="contatc_form" action="assets/include/sendmail.php" method="POST" name=" myform">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" id="contact_name" name="name" placeholder="الاسم" required data-parsley-minlength="4" /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><input type="email" class="form-control" id="contact_email" name="email" placeholder="الايميل" required /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" id="contact_subject" name="sub" placeholder="الموضوع" required data-parsley-minlength="4" /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" id="contact_phone" name="phone" placeholder="الهاتف" required /></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="contact_message" name="message" rows="7" placeholder="Message" required data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.." data-parsley-validation-threshold="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="contact_send_status"></div>
                            </div>
                        </div>
                        <div class="center-wrap">
                            <div class="button">
                                <button type="submit">Submit <i class="fa fa-long-arrow-right"></i></button>
                                <div class="mask"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-3 d-flex justify-content-center">
                <div class="mt-3 mx-3" style="width: fit-content;">
                    <a href="https://api.whatsapp.com/send?phone=0558302830&text= اكتب رسالتك هنا لاطمئن" style="text-align: center;" class="text-secondary">
                        <i class="fa fa-whatsapp fa-2x" style="width: 100%;text-align: center;"></i>
                        <p style="margin-bottom: 0px;padding:0px">رقم تواصل معهد اللغات</p>
                        <p>0558302830</p>
                    </a>
                </div>
                <div class="mt-3 mx-3" style="width: fit-content;">
                    <a href="https://api.whatsapp.com/send?phone=0544122982&text= اكتب رسالتك هنا لاطمئن" style="text-align: center;" class="text-success">
                        <i class="fa fa-whatsapp fa-2x" style="width: 100%;text-align: center;"></i>
                        <p style="margin-bottom: 0px;padding:0px">رقم تواصل مركز الارشاد</p>
                        <p>0544122982</p>
                    </a>
                </div>
                <div class="mt-3 mx-3" style="width: fit-content;">
                    <a href="https://api.whatsapp.com/send?phone=0560568673 &text= اكتب رسالتك هنا لاطمئن" style="text-align: center;">
                        <i class="fa fa-whatsapp fa-2x" style="width: 100%;text-align: center;"></i>
                        <p style="margin-bottom: 0px;padding:0px">رقم تواصل معهد التدريب</p>
                        <p>0560568673 </p>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team" class="our-team 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 news-head">
                <h3>آخر الاخبار</h3>
            </div>
        </div>
        <div class="row">
            <div class="team-slides">
                @foreach($LastNews as $news)
                <div class="news-box">
                    <img src="{{$news->photo}}" alt="Image Description" />
                    <div class="box-content">
                        <h4 class="title">{{$news->title}}</h4>
                        <div class="new-details">{{$news->description}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
<script>
    $('#home__page').addClass('active');
    var i = 0;
    var txt = 'مستشاره نفسية وأسرية، تشخيص اضطرابات نفسيه عند الاطفال والكبار، جلسات علاجية نفسية، خبرة أكثر من ٢٠ سنة في المجال النفسي، لقاءات تلفزيونية واذاعية';
    var speed = 50;
    let finish = true;
    var timeoutId;
    $(window).scroll(function(event) {
        if (event.currentTarget.scrollY > 300 && event.currentTarget.scrollY < 800 && finish) {
            finish = false;
            typeWriter();
        } else if (event.currentTarget.scrollY < 300 || event.currentTarget.scrollY > 800) {
            $('#BriefDoc').html('');
            i = 0;
            finish = true;
            clearTimeout(timeoutId);
        }
    });

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("BriefDoc").innerHTML += txt.charAt(i);
            i++;
            timeoutId = setTimeout(typeWriter, speed);
        }
    }
</script>
@endsection
