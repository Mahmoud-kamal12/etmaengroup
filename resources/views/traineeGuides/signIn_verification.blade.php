@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <div class="section-title">
                        <h3>لمتابعة دورة تحتاج إلى تسجيل الدخول بالتحقق الثنائي، آتبع الخطوات التالية لتسجيل الدخول.</h4>
                        <span class="section-title-bg"></span>
                    </div>
                </div>


                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>1- اضغط على رمز ≡ أعلى الصفحة جهة اليمين ثم انقر على تسجيل دخول:</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/signIn/img_1.gif')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>2- اكتب بريدك الإلكتروني الذي استخدمته بالتسجيل في الدورة مسبقاً ثم مباشرة اضغط على زر إرسال دون الحاجة لكتابة كلمة مرور. </h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/signIn/img_2.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                    <h4>وحينها ستظهر إفادة بإرسال رسالة تحقق على بريدك.</h4>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>4- عنوان الرسالة التي ستسلمها على بريدك الإلكتروني”تسجيل دخول” افحتها ثم انقر على  “تسجيل دخول” او زر “اضغط هنا”</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/signIn/img_3.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>5- قم بالنقر على تلك العلامة أعلى الصفحة جهة اليمين ≡ و اضغط على اللوحة الرئيسية</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/signIn/img_4.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>5- وحينها سيظهر قائمة بالدورات التسجيل سجل به المتدرب وينغي ان ينقر على زر “محتوى الدورة” لتصفح محتواها.</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/signIn/img_5.jpg')}}" class="card-img-top" alt="English_beginners">
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

