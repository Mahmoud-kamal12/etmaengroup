@extends('layouts.front.home')

@section('content')
    <section id="blog" class="our-blog 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h2>المدونة</h2>
                        <span class="section-title-bg">Blog</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" href="{{asset('front/img/blog/elderly2.jpg')}}" target="_BLANK">
                            <img src="{{asset('front/img/blog/elderly2.jpg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">28 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#">فعالية اليوم العالمي لكبار السن</a></h2>
                            </div>
                        </div>
                        <div class="post-content">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/down_syndrome.jpg')}}">
                            <img src="{{asset('front/img/blog/down_syndrome.jpg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#">فعالية فرحة وطن متلازمة داون ومبادرة حرفتي مهنتي
                                    </a></h2>
                            </div>
                        </div>
                        <div class="post-content">
                            <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum sagittis nulla,
                                non vehicula mauris rutrum vitae. Sed non consequat dolor. Cras in odio augue.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/youth.jpg')}}">
                            <img src="{{asset('front/img/blog/youth.jpg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">15 <span class="month">Dec</span></div>
                            <div class="title-meta">
                                <h2><a href="#">نادي الشبـــــــــــاب
                                    </a></h2>
                            </div>
                        </div>
                        <div class="post-content">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/data/opening/opening5.jpeg')}}">
                            <img src="{{asset('front/img/data/opening/opening5.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">10 <span class="month">Dec</span></div>
                            <div class="title-meta">
                                <h2><a href="#">صورة الافتتاح
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/breast_cancer1.jpeg')}}">
                            <img src="{{asset('front/img/blog/breast_cancer1.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#">فعاليات سرطان الثدى
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/breast_cancer2.jpeg')}}">
                            <img src="{{asset('front/img/blog/breast_cancer2.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#">فعاليات سرطان الثدى 2
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/center_proram1.jpeg')}}">
                            <img src="{{asset('front/img/blog/center_proram1.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> برامج المركز 1
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/center_proram2.jpeg')}}">
                            <img src="{{asset('front/img/blog/center_proram2.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> برامج المركز 2
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/center_proram3.jpeg')}}">
                            <img src="{{asset('front/img/blog/center_proram3.jpeg')}}" alt="blog-one" /></a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> برامج المركز 3
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/center_proram4.jpeg')}}">
                            <img src="{{asset('front/img/blog/center_proram4.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> برامج المركز 4
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/center_proram5.jpeg')}}">
                            <img src="{{asset('front/img/blog/center_proram5.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> برامج المركز 5
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/center_proram6.jpeg')}}">
                            <img src="{{asset('front/img/blog/center_proram6.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> برامج المركز 6
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/center_proram7.jpeg')}}">
                            <img src="{{asset('front/img/blog/center_proram7.jpeg')}}" alt="blog-one" /></a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> برامج المركز 7
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/children_improve.jpeg')}}">
                            <img src="{{asset('front/img/blog/children_improve.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#"> تطوير الطفل
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/companion1.jpeg')}}">
                            <img src="{{asset('front/img/blog/companion1.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">29 <span class="month">Nov</span></div>
                            <div class="title-meta">
                                <h2><a href="#">مبادرة رفقا بها
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/companion2.jpeg')}}">
                            <img src="{{asset('front/img/blog/companion2.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">29 <span class="month">Nov</span></div>
                            <div class="title-meta">
                                <h2><a href="#">مبادرة رفقا بها 2
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/companion3.jpeg')}}">
                            <img src="{{asset('front/img/blog/companion3.jpeg')}}" alt="blog-one" /></a>
                        <div class="blog-info">
                            <div class="date-box">29 <span class="month">Nov</span></div>
                            <div class="title-meta">
                                <h2><a href="#">مبادرة رفقا بها 3
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/down_syndrome.jpg')}}">
                            <img src="{{asset('front/img/blog/down_syndrome.jpg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">29 <span class="month">Sep</span></div>
                            <div class="title-meta">
                                <h2><a href="#">متلازمة داون
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/elderly1.jpeg')}}">
                            <img src="{{asset('front/img/blog/elderly1.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#">كبار السن
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/elderly2.jpg')}}">
                            <img src="{{asset('front/img/blog/elderly2.jpg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">30 <span class="month">Feb</span></div>
                            <div class="title-meta">
                                <h2><a href="#">كبار السن 2
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/family.jpeg')}}">
                            <img src="{{asset('front/img/blog/family.jpeg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#">مبادرة اسرتى
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/traners_course.jpg')}}">
                            <img src="{{asset('front/img/blog/traners_course.jpg')}}" alt="blog-one" />
                        </a>
                        <div class="blog-info">
                            <div class="date-box">04<span class="month">Jul</span></div>
                            <div class="title-meta">
                                <h2><a href="#">دورة مهارات صناعة الطفل المفكر
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-item">
                        <a class="blog-img" target="_BLANK" href="{{asset('front/img/blog/youth.jpg')}}">
                            <img src="{{asset('front/img/blog/youth.jpg')}}" alt="blog-one" /></a>
                        <div class="blog-info">
                            <div class="date-box">25 <span class="month">Jan</span></div>
                            <div class="title-meta">
                                <h2><a href="#">مادر الشباب
                                    </a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#blog').addClass('active');
    </script>
@endsection
