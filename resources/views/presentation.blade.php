@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @isset($questionnaire)
                    <embed src="{{ asset($questionnaire->value) }}" type="text/pdf" width="100%" height="800" style="border:1px solid black;">
                @endisset
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#aboutUs__page').addClass('active');
    </script>
@endsection
