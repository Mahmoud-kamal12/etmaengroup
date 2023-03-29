@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <embed src="{{ route('TrainingManual-pdf') }}" type="text/pdf" width="100%" height="800" style="border:1px solid black;">
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#TrainingManual').addClass('active');
    </script>
@endsection
