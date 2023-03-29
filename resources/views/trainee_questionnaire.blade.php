@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @isset($questionnaire)
                    <iframe src="{{$questionnaire->value}}" width="100%" height="800" style="border:1px solid black;">
                    </iframe>
                @endisset
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#questionnaire').addClass('active');
    </script>
@endsection
