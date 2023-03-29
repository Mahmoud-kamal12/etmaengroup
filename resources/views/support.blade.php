@extends('layouts.front.home')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        @isset($settings[7])
                            <h2>{{ $settings[7]->title }}</h2>
                        @endisset
                        <p>يمكنك هذا القسم من إنشاء تذكرة دعم فني</p>
                        <span class="section-title-bg"></span>
                    </div>
                </div>
            </div>
            <div class="m-5">
                @isset($settings[7])
                    {!! $settings[7]->subject !!}
                @endisset
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $('#contacts').addClass('active');
        $('footer').addClass('short_data')
    </script>
@endsection

