@extends('layouts.front.home')

@section('content')
    <section id="services" class="services ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h2>خدماتنا</h2>
                        <span class="section-title-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 text-center">
                    <div class="service-item">
                        <div class="glyph"><i class="glyph-icon flaticon-012-management"></i></div>
                        <h3>الاستشارات التربوية</h3>
                        <p>
                            هي مساعدة الفرد على كل ما يعترضه من مشاكل تربوية ومهنية ومن هذه المشاكل التأخر العقلي
                            والدراسي. بطء التعلم، صعوبات التعلم، الإهمال الدراسي، قلة التركيز، الغياب المدرسي المتكرر،
                            صعوبة بعض المواد الدراسية.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <div class="service-item">
                        <div class="glyph"><i class="glyph-icon flaticon-032-target"></i></div>
                        <h3>الاستشارات الاجتماعية</h3>
                        <p>
                            مساعدة الأسرة على التوافق والتكيف الاجتماعي بين افراد الاسرة وإيجاد لغة حوار بين أبنائها
                            والشعور بالاستقرار الاسري مثل الحوار الاسري والفكري، العلاقات الزوجية ومشكلاتها، المقبلين
                            على الزواج والطلاق، مشاكل الفتيات والشباب، مشاكل الأطفال.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <div class="service-item">
                        <div class="glyph"><i class="glyph-icon flaticon-024-user"></i></div>
                        <h3>الاستشارات النفسية </h3>
                        <p>
                            مساعدة الفرد للتغلب على مشكلاته النفسية وتهيئة الأفراد للوقاية من المشكلات النفسية وإيجاد
                            الحلول لها وتصميم خطط علاجية تناسب حالتهم النفسية ومنها
                            (القلق، الاكتئاب، المخاوف، الخجل، الوسواس القهري، التوتر، الاضطرابات الجنسية النفسية،
                            اضطرابات الهوية، تشخيص القدرات العقلية (اختبارات الذكاء))
                            والاضطرابات النمائية كالتوحد والمتلازمات والاضطرابات السلوكية كالنشاط الزائد وتشتت الانتباه
                            والعدوان والعناد والمشكلات النفسية للأطفال كالتبول اللاإرادي والتأتأة والحبسة الكلامية،
                            والخجل الاجتماعي.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#ourSectionsItem').addClass('active');
        $('footer').addClass('short_data')
    </script>
@endsection
