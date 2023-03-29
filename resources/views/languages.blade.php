@extends('layouts.front.home')

@section('content')
<!-- <div class="search-modal text-center modal fade" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="header-search-form">
                        <form>
                            <input placeholder="Search" /> <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<section class="languagesPage">
    <h1>قطاع اللغات</h1>
    <section class="allCourses">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-md-3">
                <div class="col mb-4">
                    <a href="/languages/send-data">
                        <div class="card">
                            <img src="{{asset('front/img/languages_courses/English_beginners.jpg')}}"
                                class="card-img-top" alt="English_beginners">
                            <div class="card-body">
                                <h5 class="card-title">برنامج الانجليزيه للمبتدئين</h5>
                                <div class="courseDescription">
                                    <div class="hours">شهرين</div>
                                    <div class="price">1300 ر.س </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="/languages/send-data">
                        <div class="card">
                            <img src="{{asset('front/img/languages_courses/English_speak.jpg')}}" class="card-img-top"
                                alt="English_speak">
                            <div class="card-body">
                                <h5 class="card-title">برنامج مهارات التحدث بالانجليزيه</h5>
                                <div class="courseDescription">
                                    <div class="hours">3 شهور</div>
                                    <div class="price">1425 ر.س </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{asset('front/img/languages_courses/spanish_beginners.jpg')}}" class="card-img-top"
                            alt="English_beginners">
                        <div class="card-body">
                            <h5 class="card-title">برامج اللغة الاسبانية للمبتدئين</h5>
                            <div class="courseDescription">
                                <div class="hours">شهرين</div>
                                <div class="price">1300 ر.س </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{asset('front/img/languages_courses/spanish_beginners.jpg')}}" class="card-img-top"
                            alt="English_speak">
                        <div class="card-body">
                            <h5 class="card-title">برامج اللغة الالمانية للمبتدئين</h5>
                            <div class="courseDescription">
                                <div class="hours">3 شهور</div>
                                <div class="price">1425 ر.س </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <a href="/languages/send-data">
                        <div class="card">
                            <img src="{{asset('front/img/languages_courses/spanish_beginners.jpg')}}"
                                class="card-img-top" alt="Spanish beginners">
                            <div class="card-body">
                                <h5 class="card-title"> برامج اللغة الصينيه للمبتدئين</h5>
                                <div class="courseDescription">
                                    <div class="hours">شهرين</div>
                                    <div class="price">1425 ر.س </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="/languages/send-data">
                        <div class="card">
                            <img src="{{asset('front/img/languages_courses/English_business.jpg')}}"
                                class="card-img-top" alt="English_business">
                            <div class="card-body">
                                <h5 class="card-title">برنامج لغة عالم الاعمال</h5>
                                <div class="courseDescription">
                                    <div class="hours">اسبوع</div>
                                    <div class="price">375 ر.س</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-100">
                    <hr>
                </div>
                <div class="col mb-4">
                    <a href="/languages/send-data">
                        <div class="card">
                            <img src="{{asset('front/img/languages_courses/English_ielts.jpg')}}" class="card-img-top"
                                alt="English_ielts">
                            <div class="card-body">
                                <h5 class="card-title">برنامج التأهيل لاختبار الايلتس </h5>
                                <div class="courseDescription">
                                    <div class="hours">شهر ونصف</div>
                                    <div class="price">950 ر.س </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="carouselExampleFade" class="carousel slide carousel-fade EnglishPlanSlider" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('front/img/English_slider/1.PNG')}}" class="d-block w-100"
                            alt="{{asset('front/img/English_slider/1.PNG')}}">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/2.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/3.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/4.PNG ')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/5.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/6.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/7.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/8.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/9.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/10.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/11.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/12.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/13.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/14.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/15.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/16.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/img/English_slider/17.PNG')}}" class="d-block w-100"
                            alt="English plan image">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleFade"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </section>
    <hr>
    <section class="ielts">
        <div class="container">
            <h2>What is IELTS?</h2>
            <p>
                The International English Language Testing System (IELTS) is designed to help you work, study or
                migrate to a country where English is the native language. This includes countries such as
                Australia, Canada, New Zealand, the UK and USA.
                Your ability to listen, read, write and speak in English will be assessed during the test. IELTS is
                graded on a scale of 1-9.
                IELTS is jointly owned by the British Council, IDP: IELTS Australia and Cambridge Assessment
                English.

            </p>
            <h2>Why take IELTS?</h2>
            <p>If you are looking to work, live or study in an English-speaking country, then you must be able to
                demonstrate a high level of English language ability.
                English is the third most spoken language in the world, with 379 million speakers worldwide.
                Being able to communicate in the native language of the country you wish to work or study in, has a
                wide range of benefits. It is also essential for job opportunities as well as integration into the
                community.
                IELTS is the most popular test for those looking to migrate to Australia, Canada, New Zealand and
                the UK. It is globally recognised by more than 11,000 employers, universities, schools and
                immigration bodies including 3,400 institutions in the USA.
            </p>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 all-post">
                        <div class="center-wrap">
                            <div class="button">
                                <a href="/ielts_test">Go to IELTS test<i class="fa fa-long-arrow-right"></i></a>
                                <div class="mask"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <section class="courses cta-bg-img2">
        <h2>احدث الدورات </h2>
        <div class="container">
            <div class="row">
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container course_container">
                        <img src="{{asset('front/img/language_page/learn_english.jpg')}}" class="mr-3"
                            alt="course image" style="width:150px;">
                        <div class="media-body">
                            <h5 class="mt-0">برنامج الانجليزية للمبتدئين</h5>
                            <a href="./assets/pdf/1.pdf" target="_blank">لرؤية المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container">
                        <img src="{{asset('front/img/language_page/IELTS_test.jpg')}}" class="mr-3" alt="course image"
                            style="width:150px;">
                        <div class="media-body">
                            <h5 class="mt-0"> برنامج اجتياز اختبار الايلتس</h5>
                            <a href="./assets/pdf/2.pdf" target="_blank" class="stretched-link">لرؤية المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container">
                        <img src="{{asset('front/img/language_page/speaking.png')}}" class="mr-3" alt="course image"
                            style="width:150px;">
                        <div class="media-body">
                            <h5 class="mt-0">Speaking English </h5>
                            <a href="./assets/pdf/3.pdf" target="_blank" class="stretched-link">لرؤية المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container">
                        <img src="{{asset('front/img/language_page/Phonemic chart1.png')}}" class="mr-3"
                            alt="course image" style="width:150px;">
                        <div class="media-body">
                            <h5 class="mt-0"> ورشةعمل إنطق
                                إنجليزية</h5>
                            <a href="./assets/pdf/4.pdf" target="_blank" class="stretched-link">لرؤية المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container">
                        <img src="{{asset('front/img/language_page/beginners.png')}}" class="mr-3" alt="course image"
                            style="width:150px;">
                        <div class="media-body">
                            <h5 class="mt-0"> الإنجليزية للمبتدئين</h5>
                            <a href="./assets/pdf/5.pdf" target="_blank" class="stretched-link">لرؤية المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container">
                        <img src="{{asset('front/img/language_page/presentation.jpg')}}" class="mr-3" alt="course image"
                            style="width:150px;">
                        <div class="media-body">
                            <h5 class="mt-0"> مهارات العرض
                                و التقديم</h5>
                            <a href="./assets/pdf/6.pdf" target="_blank" class="stretched-link">لرؤية المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container">
                        <img src="{{asset('front/img/language_page/english.jpg')}}" class="mr-3" alt="course image"
                            style="width:150px;">
                        <div class="media-body">
                            <h5 class="mt-0">
                                الدورات التدريبية</h5>
                            <a href="{{asset('front/pdf/7.pdf')}}" target="_blank" class="stretched-link">لرؤية
                                المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-sm-12">
                    <div class="media position-relative course_container">
                        <img src="{{asset('front/img/language_page/English_business.jpg')}}" class="mr-3"
                            alt="course image" style="width:100px;">
                        <div class="media-body">
                            <h5 class="mt-0"> Business English</h5>
                            <a href="./assets/pdf/8.pdf" target="_blank" class="stretched-link">لرؤية المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection


@section('script')
<script>
$('#ourSectionsItem').addClass('active');
</script>
@endsection
