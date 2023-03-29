@extends('layouts.front.home')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    @isset($settings[1])
                        <h2>{{ $settings[1]->title }}</h2>
                    @endisset
                    <span class="section-title-bg"></span>
                </div>
            </div>
            @isset($settings[1])
                <p>{!! $settings[1]->subject !!}</p>
            @endisset
            <p>تقوم سياسة الحضور بالمعهد على إعتبار المتدرب حاضراً طالما أتم حضور عدد الأيام والساعات المعتمدة في
                الترخيص، حيث يعتبر التدريب الافتراضي مساوياً للتدريب الحضوري في الإجتياز والمدة وعدد الساعات والمسمى
                الأكاديمي.
            </p>
        </div>
    </div>
</section>
@endsection


@section('script')
    <script>
        $('#standards').addClass('active');
        $('footer').addClass('short_data')
    </script>
@endsection

{{--@extends('layouts.front.home')--}}

{{--@section('content')--}}
{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 offset-lg-2 text-center">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>{{ $settings[1]->title }}</h2>--}}
{{--                        <span class="section-title-bg"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            {!! $settings[1]->subject !!}--}}

{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}


{{--@section('script')--}}
{{--    <script>--}}
{{--        $('#standards').addClass('active');--}}
{{--    </script>--}}
{{--@endsection--}}

