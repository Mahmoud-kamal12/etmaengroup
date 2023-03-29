@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <div class="section-title">
                        <h3>ماهي المتصفحات التي تدعم الدخول للقاعة؟</h3>
                        <span class="section-title-bg"></span>
                    </div>
                </div>


                <div class="row m-5 ">
                    <div class="col-8">
                        <img src="{{asset('front/img/Trainee_Guides/0ecf11ee-a6ca-416a-ac8a-c5fe49693433-640x360.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $('#smooths').addClass('active');
    </script>
@endsection

