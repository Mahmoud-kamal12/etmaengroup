@extends('layouts.front.home')

@section('content')
    <section class="p-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        @isset($settings[3])
                            <h2>{{ $settings[3]->title }}</h2>
                        @endisset
                        <span class="section-title-bg"></span>
                    </div>
                </div>
            </div>
            <div class="m-5">
                @isset($settings[3])
                    {!! $settings[3]->subject !!}
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


