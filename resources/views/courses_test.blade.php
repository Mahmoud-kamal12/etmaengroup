@extends('layouts.front.home')

@section('content')
<section id="services" class="services">
<section class="allCourses">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-md-4">
            @isset($courses)
                @foreach($courses as $course)
                    <div class="col mb-4">
                        <a href="/languages/send-data">
                            <div class="card">
                                <img src="{{asset($course->photo)}}"
                                    class="card-img-top" alt="English_beginners">
                                <div class="card-body">
                                    <h5 class="card-title">{{$course->title}}</h5>
                                    <div class="courseDescription">
                                        <div class="hours">شهرين</div>
                                        <div class="price">{{$course->price}} ر.س </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
    </section>
</section>

@endsection

@section('script')
<script>
    $('footer').addClass('short_data')
    $('#ourSectionsItem').addClass('active');
</script>
@endsection
