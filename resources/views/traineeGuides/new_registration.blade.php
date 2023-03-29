@extends('layouts.front.home')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5">
                    <div class="section-title">
                        <h3>فور حصول المتدرب على رابط التسجيل ينبغي اتباعه للخطوات التالية من اجل التسجيل في الدورة:</h3>
                        <span class="section-title-bg"></span>
                    </div>
                </div>


                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>1- النقر على كلمة سجل الآن</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/New_registration/IMG_1.jpeg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>2- اكتب البريد الإلكتروني في الخانة الأولى وبالخانة الثانية الأسم كاملاً ثم النقر على كلمة “تطبيق”</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/New_registration/IMG_2.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>3- ستظهر الرسالة التالية موضحةً انه يجب تفقد البريد الإلكتروني من اجل استلام رسالة توثيق التسجيل</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/New_registration/IMG_3.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>4- ستسلم رسالة في بريدك الإلكتروني بعنوان ” وثق بريدك الإلكتروني ” يجب فتحه والضغط على زر “وثق حسابك وسجل دخول”</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/New_registration/IMG_4.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>وفور النقر على الزر ستظهر لك الرسالة التالية موضحةً تأكيد تسجيلك دخولك بنجاح</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/New_registration/IMG_5.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>5- اذهب للدورة التي تم التسجيل بها واضغط على زر “متابعة الدورة”</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/New_registration/IMG_6.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>

                <div class="row m-5 ">
                    <div class="col-lg-5">
                        <h4>هكذا سيكون شكل محتوى الدورة واقسامها فور النقر على زر متابعة الدورة</h4>
                    </div>
                    <div class="col-4">
                        <img src="{{asset('front/img/Trainee_Guides/New_registration/IMG_7.jpg')}}" class="card-img-top" alt="English_beginners">
                    </div>
                </div>
                <h5>معلومة هامة: إذا كنت سجلت في دورة مسبقاً فلا يجب عليك التسجيل بها مرة اخرى بحال اردت متابعتها ويجب نيابة عن ذلك النقر على كلمة تسجيل دخول بالموقع وإدخال بريدك الإلكتروني فقط والنقر على إرسال رسالة لبريدك الإلكتروني.</h5>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $('#smooths').addClass('active');
    </script>
@endsection

