@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h2>الادلة الإرشادية للمتدربين</h2>
                        <span class="section-title-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-10">

                    <div class="m-5">
                      <h3>تسجيل جديد للطالب واختيار الدورة</h3>
                      <a href="/traineeGuides/new_registration" class="m-3 p-3 bg-black">اضغط هنا</a>
                    </div>

                    <div class="m-5">
                      <h3>تسجيل الدخول بالتحقق الثنائي للمتدرب</h3>
                      <a href="/traineeGuides/signIn_verification" class="m-3 p-3 bg-black">اضغط هنا</a>
                    </div>

                    <div class="m-5">
                      <h3>اين سيجد الطالب استبيان المتدرب؟</h3>
                      <a href="/traineeGuides/find_trainee_questionnaire" class="m-3 p-3 bg-black">اضغط هنا</a>
                    </div>

                    <div class="m-5">
                      <h3>المتطلبات التقنية لإستخدام النظام</h3>
                      <a href="/traineeGuides/technical_requirements" class="m-3 p-3 bg-black">اضغط هنا</a>
                    </div>

                    <div class="m-5">
                      <h3>ماهي المتصفحات التي تدعم الدخول للفصول الافتراضية؟</h3>
                      <a href="/traineeGuides/browsers_support" class="m-3 p-3 bg-black">اضغط هنا</a>
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

