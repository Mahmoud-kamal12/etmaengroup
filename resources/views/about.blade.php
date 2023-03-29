@extends('layouts.front.home')

@section('content')

    <!-- End Search Modal -->
    <section id="about" class="about-us pt-100 pb-70">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    @isset($settings[8])
                        <h2>{{ $settings[8]->title }}</h2>
                    @endisset
                    <p>مركز متخصص في تقديم خدمات الإرشاد النفسي والاجتماعي والتربوي وتنمية الفكر وتعديل السلوك من خلال
                        أسس علمية مهنية، ويطمئن الفرد والمجتمع ويهتم بتقديم الخدمات الارشادية النفسية والاسرية
                        والاجتماعية والتربوية ويعدل من المفاهيم الخاطئة لبناء الاسرة
                    </p>
                    <span class="section-title-bg">About</span>
                </div>
            </div>
            <div class="row row-cols-1">
                <hr>
                <div class="col">
                    <div class="about-info">
                        @isset($settings[8])
                            {!! $settings[8]->subject !!}
                        @endisset
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#aboutUs__page').addClass('active');
    </script>
@endsection