@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        @isset($settings[4])
                            <h2>{{ $settings[4]->title }}</h2>
                        @endisset
                        <span class="section-title-bg"></span>
                    </div>
                </div>
            </div>
            <div class="m-5">
                @isset($settings[4])
                    {!! $settings[4]->subject !!}
                @endisset 
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $('#standards').addClass('active');
    </script>
@endsection


