@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <div class="section-title">
                        <h3>خطوات الوصول لاستبيان المتدرب:</h3>
                        <span class="section-title-bg"></span>
                    </div>
                </div>


                <div class="row m-5 ">
                    <div class="col-lg-7">
                        <h5>تسجيل دخول > القائمة الرئيسية > متابعة دورتي > المنهاج > استبيان الطالب</h5>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/Find_trainee_questions/استبيان-563x1024.jpg')}}" class="card-img-top" alt="English_beginners">
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

