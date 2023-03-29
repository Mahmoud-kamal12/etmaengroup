@extends('layouts.front.home')

@section('content')
    <section id="works" class="our-works 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h2>Gallery</h2>
                        <p>معرض صور مركز اطمأن</p>
                        <span class="section-title-bg">Gallery</span>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div id="filters" class="filter-menu text-center roxy-projects-active">
                        <ul>
                            <li class="active" data-filter="*">الكل</li>
                            <li class="" data-filter=".Gallery1"> الافتتاح</li>
                            <li class="" data-filter=".Gallery2">فيديوهات</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="Portfolio" class="row">
                <div class="col-md-6 col-lg-4 filtr-item Gallery1">
                    <div class="work-details">
                        <img src="{{asset('front/img/data/opening/opening1.jpeg')}} " alt="sample image" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_7.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item  Gallery1">
                    <div class="work-details">
                        <img src="{{asset('front/img/data/opening/opening5.jpeg')}} " alt="sample image" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item  Gallery1">
                    <div class="work-details">
                        <img src="{{asset('front/img/data/opening/opening6.jpeg')}} " alt="sample image" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item  Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_1.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>----
                <div class="col-md-6 col-lg-4 filtr-item   Gallery1">
                    <div class="work-details">
                        <img src="{{asset('front/img/data/opening/opening2.jpeg')}} " alt="sample image" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2 ">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_2.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_3.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div
                <div class="col-md-6 col-lg-4 filtr-item  Gallery1">
                    <div class="work-details">
                        <img src="{{asset('front/img/data/opening/opening4.jpeg')}} " alt="sample image" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_4.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_5.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_6.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item  Gallery1">
                    <div class="work-details">
                        <img src="{{asset('front/img/data/opening/opening3.jpeg')}} " alt="sample image" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_8.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_9.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_10.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                    <div class="work-details">
                        <video width="320" height="240" controls>
                            <source src="{{asset('front/videos/video_11.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

            </div> -->
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="heading-1">
                        <h2 class="m-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            الافتتاح
                            </button>
                        </h2>
                    </div>
                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="d-flex justify-content-center flex-wrap">
                                @isset($galleries_section_one)
                                    @foreach($galleries_section_one as $gallery_section_one)
                                        <div class="col-md-6 col-lg-4 filtr-item  Gallery1 px-2">
                                            <div class="work-details">
                                                <img src="{{asset('front/img/data/opening/opening5.jpeg')}}" alt="sample image" />
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>

                    <div class="card-header" id="heading-2">
                        <h2 class="m-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                            فيديوهات
                            </button>
                        </h2>
                    </div>
                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="d-flex justify-content-center flex-wrap">
                                @isset($galleries_section_two)
                                    @foreach($galleries_section_two as $gallery_section_two)
                                        <div class="col-md-6 col-lg-4 filtr-item Gallery2">
                                            <div class="work-details">
                                                <video width="320" height="240" controls>
                                                    <source src="{{asset($gallery_section_two->file)}}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <h4>{{$gallery_section_two->title}}</h4>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <!-- لا يوجد كورسات .. او لم يتم التفعيل بعد -->
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $('#gallery').addClass('active');
    </script>
@endsection
