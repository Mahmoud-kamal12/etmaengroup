@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        @isset($settings[6])
                            <h2>{{ $settings[6]->title }}</h2>
                        @endisset
                        <span class="section-title-bg"></span>
                    </div>
                </div>
            </div>
            <div class="m-5">
                @isset($settings[6])
                    {!! $settings[6]->subject !!}
                @endisset   
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $('#contacts').addClass('active');
    </script>
@endsection

