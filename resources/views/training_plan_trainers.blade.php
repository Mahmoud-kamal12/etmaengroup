@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <embed src="{{ route('training_plan_trainers-pdf') }}" type="text/pdf" width="100%" height="800" style="border:1px solid black;">
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#Training_plan').addClass('active');
    </script>
@endsection
