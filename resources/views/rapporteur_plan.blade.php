@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        @isset($settings[5])
                            <h2>{{ $settings[5]->title }}</h2>
                        @endisset
                        <span class="section-title-bg"></span>
                    </div>
                </div>
            </div>
            <div class="m-5">
                @isset($settings[5])
                    {!! $settings[5]->subject !!}
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

