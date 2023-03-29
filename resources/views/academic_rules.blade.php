@extends('layouts.front.home')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    @isset($settings[0])
                        <h2>{{ $settings[0]->title }}</h2>
                    @endisset
                    <span class="section-title-bg"></span>
                </div>
            </div>
        </div>
        @isset($settings[0])
            {!! $settings[0]->subject !!}
        @endisset
    </div>
</section>
@endsection


@section('script')
    <script>
        $('#standards').addClass('active');
    </script>
@endsection
