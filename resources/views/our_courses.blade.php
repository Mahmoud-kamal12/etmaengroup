@extends('layouts.front.home')

@section('content')
    <!-- <div class="search-modal text-center modal fade" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="header-search-form">
                        <form>
                            <input placeholder="Search" /> <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <section class="faq 0" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h2>الدورات التدريبية</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit
                            dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                        <span class="section-title-bg">FAQ</span>
                    </div>
                </div>
            </div>
            <div class="faq-content">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="index.php#contact">
                            <div class="content-box color-effect-1">
                                <h3>هل لديك استفسارات؟</h3>
                                <div class="box-icon-wrap box-icon-effect-1 box-icon-effect-1a">
                                    <div class="box-icon"><i class="fa fa-mail-forward"></i></div>
                                </div>
                                <p>تواصل معنا للمزيد من الاستفسارات</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title"><a role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne"> قطاع تحقيق رؤية المملكة 2030
                                        </a></h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show-div show" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="/#contact?reg=SA.KV1001"> إدارة التغيير وفقا
                                                        لرؤية
                                                        2030 </a> </td>
                                                <td> SA.KV1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1002#contact"> التخطيط الإستراتيجي
                                                        وفق
                                                        برنامج التحول الوطني للمملكة </a> </td>
                                                <td> SA.KV1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1003#contact"> "تأثيرات برنامج
                                                        التحول
                                                        الوطني 2020
                                                        على القطاع غير الربحي" </a> </td>
                                                <td> SA.KV1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1004#contact"> إستراتيجيات الحوكمة
                                                        لتحقيق رؤية المملكة 2030 </a> </td>
                                                <td> SA.KV1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1005#contact"> تعزيز الهوية الوطنية
                                                        وتعزيز الإنتماء الوطني </a> </td>
                                                <td> SA.KV1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1006#contact"> آليات تحسين أداء
                                                        الجهاز
                                                        الحكومي </a> </td>
                                                <td> SA.KV1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1007#contact"> أساليب تحسين إنتاجية
                                                        موظفي الحكومة </a> </td>
                                                <td> SA.KV1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1008#contact"> طرق تنمية قنوات
                                                        التواصل
                                                        مع المواطنين ومجتمع الأعمال </a> </td>
                                                <td> SA.KV1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1009#contact"> آليات تطوير الحكومة
                                                        الإلكترونية </a> </td>
                                                <td> SA.KV1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1010#contact"> آليات تمكين الشركات
                                                        من
                                                        المساهمة الإجتماعية </a> </td>
                                                <td> SA.KV1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1011#contact"> تعزيز وتمكين التخطيط
                                                        المالي لتحقيق الرؤية </a> </td>
                                                <td> SA.KV1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1012#contact"> الإتجاهات المتقدمة في
                                                        التمكين الإقتصادي للشباب والمرآة </a> </td>
                                                <td> SA.KV1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.KV1013#contact"> إعداد دراسات الجدوي
                                                        فى
                                                        المشروعات الصغيرة والمتوسطة </a> </td>
                                                <td> SA.KV1013 </td>
                                            </tr>

                                        </table>

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"> قطاع الأمانات والبلديات
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1001#contact"> أساليب تحقيق التنمية
                                                        المستدامة في عمل المجالس البلدية والمحلية </a> </td>
                                                <td> SA.MG1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1002#contact"> إدارة الأولويات في
                                                        العمل
                                                        البلدي </a> </td>
                                                <td> SA.MG1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1003#contact"> تحديات التمويل وفرص
                                                        الاستثمار في العمل البلدي </a> </td>
                                                <td> SA.MG1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1004#contact"> تحويل الأفكار إلى خطط
                                                        عمل تنفيذية في العمل البلدي </a> </td>
                                                <td> SA.MG1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1005#contact"> أفضل الممارسات
                                                        العالمية
                                                        للوصول إلى مستوى خدمات البلدية الإلكترونية المتكاملة </a>
                                                </td>
                                                <td> SA.MG1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1006#contact"> إدارة التغيير وتحسين
                                                        مناخ العمل في البلديات </a> </td>
                                                <td> SA.MG1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1007#contact"> إدارة الإنشاءات
                                                        ومشاريع
                                                        الهندسة المعمارية وفق المعايير التكنولوجية الحديثة </a>
                                                </td>
                                                <td> SA.MG1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1008#contact"> آليات التنمية
                                                        السياحية
                                                        والتراث العمراني </a> </td>
                                                <td> SA.MG1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1009#contact"> مراجعة وتقييم وبرامج
                                                        الصيانة داخل البلديات وتطويرها </a> </td>
                                                <td> SA.MG1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1010#contact"> التقنيات المتقدمة
                                                        للتشغيل والصيانة المخططة وإعداد التقارير الفنية </a> </td>
                                                <td> SA.MG1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1011#contact"> تطبيقات إدارة الصيانة
                                                        لتحسين أداء الطرق </a> </td>
                                                <td> SA.MG1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1012#contact"> تقنيات تقييم وتأهيل
                                                        رصف
                                                        الطرق </a> </td>
                                                <td> SA.MG1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1013#contact"> معالجة التحديات وتجنب
                                                        المنازعات وإدارة مراحل التغيير </a> </td>
                                                <td> SA.MG1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1014#contact"> التخطيط البيئي
                                                        ومراقبة
                                                        التلوث والتفتيش فى البلديات </a> </td>
                                                <td> SA.MG1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1015#contact"> الإتجاهات الحديثة فى
                                                        التخطيط العمرانى </a> </td>
                                                <td> SA.MG1015 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MG1016#contact"> إدارة العقود الهندسية
                                                        في
                                                        الأمانات والبلديات </a> </td>
                                                <td> SA.MG1016 </td>
                                            </tr>
                                        </table>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">قطاع الأمن الغذائي
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1001#contact"> إعداد المراجع الداخلي
                                                        لأنظمة سلامة وجودة الغذاء </a> </td>
                                                <td> SA.FS1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1002#contact"> إعداد كبير ومراجعين
                                                        نظم
                                                        سلامة الغذاء HACCP </a> </td>
                                                <td> SA.FS1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1003#contact"> إعداد مدربين لأنظمة
                                                        سلامة وجودة الغذاء TOT </a> </td>
                                                <td> SA.FS1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1004#contact"> التشريعات والقوانين
                                                        والمواصفات القياسية الحاكمة لسلامة الغذاء </a> </td>
                                                <td> SA.FS1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1005#contact"> المواصفات الدولية ISO
                                                        15189 ومتطلباتها للمعامل </a> </td>
                                                <td> SA.FS1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1006#contact"> نظم تحليل مصادر الخطر
                                                        ونقاط التحكم الحرجة HACCP </a> </td>
                                                <td> SA.FS1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1007#contact"> الصحة والسلامة
                                                        المهنية
                                                        بمصانع الأغذية OHSAS 14001,18001 </a> </td>
                                                <td> SA.FS1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FS1008#contact"> الدبلومة المهنية في
                                                        سلامة وجودة الغذاء </a> </td>
                                                <td> SA.FS1008 </td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">قطاع الإدارة والقيادة والإشراف
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1001#contact"> القيادة التحويلية
                                                        (رؤية
                                                        جديدة في تغيير الفكر الإداري المعاصر) </a> </td>
                                                <td> SA.ML1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1002#contact"> القيادة الموقفية
                                                        والتنظيمية بين الواقع والرؤية </a> </td>
                                                <td> SA.ML1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1003#contact"> البرنامج التدريبي
                                                        الشامل
                                                        فى إدارة واكتشاف المواهب </a> </td>
                                                <td> SA.ML1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1004#contact"> بناء الاستراتيجية
                                                        الناجحه واستدامة الميزة التنافسية </a> </td>
                                                <td> SA.ML1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1005#contact"> الإبداع الإدارى فى
                                                        التنظيم والتخطيط والتنسيق </a> </td>
                                                <td> SA.ML1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1006#contact"> التخطيط الإستراتيجي
                                                        والتفكير الإبداعي في ظل العولمة </a> </td>
                                                <td> SA.ML1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1007#contact"> ورشة عمل التميز في
                                                        تطوير
                                                        العمليات الإدارية وتحقيق الجودة في الأداء </a> </td>
                                                <td> SA.ML1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1008#contact"> مهارات الذكاء العاطفي
                                                        للقيادات العليا </a> </td>
                                                <td> SA.ML1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1009#contact"> تنفيذ استراتيجيات
                                                        تخطيط
                                                        الموارد ERP (ورشة عمل) </a> </td>
                                                <td> SA.ML1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1010#contact"> صناعة القرارات
                                                        الإستراتيجية (إصنع قرارك قبل أن تتخذه) </a> </td>
                                                <td> SA.ML1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1011#contact"> الإدارة الوسطى
                                                        والتميز
                                                        الإداري والتفكير الإبداعي والإبتكار </a> </td>
                                                <td> SA.ML1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1012#contact"> أسس بناء الشخصية
                                                        القيادية في الإدارة (كيف تكون مديراً ناجحاً) </a> </td>
                                                <td> SA.ML1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1013#contact"> الطرق الحديثة في
                                                        التحفيز
                                                        لتحسين الأداء </a> </td>
                                                <td> SA.ML1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1014#contact"> المنظومة المتكاملة
                                                        للتخطيط الإستراتيجي وتطوير تقييم الأداء الإداري </a> </td>
                                                <td> SA.ML1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1015#contact"> الإستراتيجيات الحديثة
                                                        في
                                                        التفويض وإعداد قيادات الصف الثاني – الإدارة الوسطى </a>
                                                </td>
                                                <td> SA.ML1015 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1016#contact"> تطبيقات سيجما في
                                                        تطوير
                                                        الأداء المؤسسي </a> </td>
                                                <td> SA.ML1016 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1017#contact"> بطاقة الاداء المتوازن
                                                        BSC... ربط الخطط الاستراتيجيه بالتنفيذ </a> </td>
                                                <td> SA.ML1017 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1018#contact"> المهارات الإشرافية
                                                        لمشرفي ورؤساء الأقسام </a> </td>
                                                <td> SA.ML1018 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1019#contact"> نظرية الإدارة
                                                        بالنتائج
                                                        (ورشة عمل) </a> </td>
                                                <td> SA.ML1019 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1020#contact"> مهارات التنسيق
                                                        والمتابعة
                                                        وتقييم الأداء </a> </td>
                                                <td> SA.ML1020 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1021#contact"> ادارة العمل الجماعى
                                                        تمكين ، تحفيز وتوجيه الأخرين والكفاءة فى بناء علاقات العمل
                                                    </a> </td>
                                                <td> SA.ML1021 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1022#contact"> خصائص القيادة
                                                        الاستراتيجية في ظل المتغيرات الدولية والمتطلبات المرحلية (
                                                        إداري متقدم ) </a> </td>
                                                <td> SA.ML1022 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1023#contact"> مهارات القيادة
                                                        الإبداعية
                                                        وبناء فريق العمل </a> </td>
                                                <td> SA.ML1023 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1024#contact"> آليات تنمية المهارات
                                                        الإشرافية الحديثة </a> </td>
                                                <td> SA.ML1024 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1025#contact"> تنمية مهارات موظفي
                                                        الخدمات المساندة </a> </td>
                                                <td> SA.ML1025 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1026#contact"> مهارات الإدارة
                                                        اليابانية
                                                        (كايزن) </a> </td>
                                                <td> SA.ML1026 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1027#contact"> إدارة الأزمات
                                                        والمواقف
                                                        الحرجة والتوتر في العمل </a> </td>
                                                <td> SA.ML1027 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1028#contact"> دبلوماسية الإدارة في
                                                        إحداث وإدارة التغيير </a> </td>
                                                <td> SA.ML1028 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1029#contact"> التخطيط الاستراتيجي
                                                        والتشغيلي </a> </td>
                                                <td> SA.ML1029 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1030#contact"> ورشة عمل الإدارة
                                                        الحديثة
                                                        لتحقيق الأهداف </a> </td>
                                                <td> SA.ML1030 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1031#contact"> التميز الإداري في
                                                        الأداء
                                                        بين النماذج الأوربية والأمريكية والأسيوية </a> </td>
                                                <td> SA.ML1031 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1032#contact"> تحسين المستوى الإداري
                                                        القائم على تطوير وقياس الأداء المؤسسي وفق معايير الجودة
                                                        المهنية </a> </td>
                                                <td> SA.ML1032 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1033#contact"> إدارة المعرفة
                                                        والإدارة
                                                        الإلكترونية وتحدياتها </a> </td>
                                                <td> SA.ML1033 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1034#contact"> أدوات المدير الفعال
                                                        في
                                                        التصدي للأزمات وآليات الإستعداد لها </a> </td>
                                                <td> SA.ML1034 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1035#contact"> فنون التعامل مع
                                                        المشاكل
                                                        وإتخاذ القرارات الصائبة </a> </td>
                                                <td> SA.ML1035 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1036#contact"> التعامل مع ضغوط العمل
                                                        وإدارة الوقت </a> </td>
                                                <td> SA.ML1036 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1037#contact"> البرنامج التدريبي
                                                        الشامل
                                                        لإعداد قيادات المستقبل </a> </td>
                                                <td> SA.ML1037 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ML1038#contact"> العادات السبع للأشخاص
                                                        الأكثر فعالية 7 Habits </a> </td>
                                                <td> SA.ML1038 </td>
                                            </tr>
                                        </table>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع إدارة المشروعات
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PM1001#contact"> برنامج البريمافيرا
                                                        الحل
                                                        المتكامل لإدارة المشروعات </a> </td>
                                                <td> SA.PM1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PM1002#contact"> إدارة المشروعات
                                                        بإستخدام
                                                        Project MS </a> </td>
                                                <td> SA.PM1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PM1003#contact"> إدارة المشاريع
                                                        الإحترافية PMP </a> </td>
                                                <td> SA.PM1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PM1004#contact"> دراسات الجدوى
                                                        الإقتصادية
                                                        للمشاريع وحساب التكاليف </a> </td>
                                                <td> SA.PM1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PM1005#contact"> نظم المعلومات
                                                        الجغرافية
                                                        (GIS) </a> </td>
                                                <td> SA.PM1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PM1006#contact"> إعادة هندسة عمليات
                                                        المشروعات PRS </a> </td>
                                                <td> SA.PM1006 </td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix"> قطاع إدارة المخاطر

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.RM1001#contact"> أساسيات إدارة المخاطر
                                                    </a> </td>
                                                <td> SA.RM1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.RM1002#contact"> الإدارة الفاعلة
                                                        لمخاطر
                                                        الأعمال ISO 31000-2017 </a> </td>
                                                <td> SA.RM1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.RM1003#contact"> إدارة المخاطر
                                                        وعلاقتها
                                                        بوحدات دعم واتخاذ القرار </a> </td>
                                                <td> SA.RM1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.RM1004#contact"> فنيات إدارة المخاطر
                                                        المالية </a> </td>
                                                <td> SA.RM1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.RM1005#contact"> تقييم المخاطر في
                                                        الشركات
                                                        الاستثمارية والبنوك والمصارف </a> </td>
                                                <td> SA.RM1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.RM1006#contact"> المهارات الفنية لمدير
                                                        المخاطر المحترف </a> </td>
                                                <td> SA.RM1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.RM1007#contact"> المخاطر التشغيلية
                                                        لشركات
                                                        الاستثمار والتطوير العقاري </a> </td>
                                                <td> SA.RM1007 </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading7">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapse7"> قطاع الإدارة السياحية والفندقية

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="heading7">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1001#contact"> تطوير العلاقات
                                                        العامة
                                                        في قطاعي السياحة والسفر </a> </td>
                                                <td> SA.THM1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1002#contact"> فن الإرشاد السياحي:
                                                        الأدلاء السياحيين </a> </td>
                                                <td> SA.THM1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1003#contact"> مهارات الاتصال
                                                        الإداري
                                                        والتجاري في القطاع السياحي </a> </td>
                                                <td> SA.THM1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1004#contact"> التسويق والترويج
                                                        السياحي </a> </td>
                                                <td> SA.THM1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1005#contact"> الإدارة البيئية
                                                        المتكاملة في المنشأة السياحية </a> </td>
                                                <td> SA.THM1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1006#contact"> النظام المحاسبي في
                                                        الفنادق والمنشآت السياحية </a> </td>
                                                <td> SA.THM1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1007#contact"> إدارة الموارد
                                                        البشرية
                                                        في الفنادق والمطاعم السياحية </a> </td>
                                                <td> SA.THM1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1008#contact"> إدارة المكاتب
                                                        الأمامية
                                                        في الفنادق </a> </td>
                                                <td> SA.THM1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1009#contact"> إدارة الجودة في
                                                        صناعة
                                                        الضيافة </a> </td>
                                                <td> SA.THM1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.THM1010#contact"> إدارة المخاطر
                                                        والسلامة
                                                        بالفنادق </a> </td>
                                                <td> SA.THM1010 </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading8">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseEight" aria-expanded="false"
                                            aria-controls="collapse8"> قطاع الهيئات والمنشأت الصحية

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="heading8">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1001#contact"> الدورة التحضيرية
                                                        للممرضين والممرضات لاجتياز امتحانات الهيئات الصحية </a>
                                                </td>
                                                <td> SA.HM1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1002#contact"> إعداد المدربين في
                                                        المجال
                                                        الصحي </a> </td>
                                                <td> SA.HM1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1003#contact"> الإدارة الفعالة
                                                        للمستشفيات والعيادات الخارجية </a> </td>
                                                <td> SA.HM1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1004#contact"> الإتجاهات الحديثة في
                                                        إدارة حسابات المرضى </a> </td>
                                                <td> SA.HM1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1005#contact"> تطوير مهارات التعامل
                                                        مع
                                                        الزوار والمرضى </a> </td>
                                                <td> SA.HM1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1006#contact"> المهارات القيادية
                                                        والفنية لمقدمي الرعاية الصحية </a> </td>
                                                <td> SA.HM1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1007#contact"> الإبتكار في مجال
                                                        الرعاية
                                                        الصحية </a> </td>
                                                <td> SA.HM1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1008#contact"> دور الإعلام الرقمي في
                                                        التثقيف الصحي </a> </td>
                                                <td> SA.HM1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1009#contact"> البحث العلمي في
                                                        المجال
                                                        الصحي </a> </td>
                                                <td> SA.HM1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1010#contact"> القيادة التنفيذية فى
                                                        القطاع الصحي </a> </td>
                                                <td> SA.HM1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1011#contact"> تنمية المهارات
                                                        الإشرافية
                                                        للأطباء </a> </td>
                                                <td> SA.HM1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1012#contact"> إدارة المخاطر في
                                                        المختبرات وبنوك الدم </a> </td>
                                                <td> SA.HM1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1013#contact"> فن إدارة الموارد
                                                        البشرية
                                                        في المنظمات الصحية </a> </td>
                                                <td> SA.HM1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1014#contact"> الإستعداد لخطط
                                                        الطوارئ
                                                        الداخلية والخارجية بالمستشفيات </a> </td>
                                                <td> SA.HM1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HM1015#contact"> أساسيات مكافحة العدوى
                                                        فى
                                                        المستشفيات </a> </td>
                                                <td> SA.HM1015 </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading9">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseNine" aria-expanded="false"
                                            aria-controls="collapse9"> قطاع الموارد البشرية والتدريب

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="heading9">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1001#contact"> الأساليب الحديثة في
                                                        التخطيط الفعال للإحلال الوظيفي والتوطين في الموارد البشرية
                                                    </a> </td>
                                                <td> SA.HR1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1002#contact"> إستقطاب الكفاءات
                                                        الداخلية والإحلال الوظيفي (التوطين الأمثل) </a> </td>
                                                <td> SA.HR1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1003#contact"> إدارة الجدارات كأسلوب
                                                        استراتيجي لإدارة الموارد البشرية </a> </td>
                                                <td> SA.HR1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1004#contact"> الكفاءة في إدارة
                                                        االموارد البشرية والتدريب والتطوير الوظيفى (ISO 10015) </a>
                                                </td>
                                                <td> SA.HR1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1005#contact"> شرح قانون التأمينات
                                                        الإجتماعية السعودي الجديد </a> </td>
                                                <td> SA.HR1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1006#contact"> مهارات الإستقطاب
                                                        والتعيين وأساليب المحافظة على الموارد البشرية المتاحة
                                                        وتطويرها </a> </td>
                                                <td> SA.HR1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1007#contact"> تقييم وتحليل الأداء
                                                        الفردي والمؤسسي </a> </td>
                                                <td> SA.HR1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1008#contact"> إدارة الأداء
                                                        والمكافآت
                                                        Performance and Reward Management </a> </td>
                                                <td> SA.HR1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1009#contact"> إعداد سلم الرواتب
                                                        والوصف
                                                        والتوصيف الوظيفي </a> </td>
                                                <td> SA.HR1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1010#contact"> فعالية التخطيط
                                                        الإستراتيجي للقوى العاملة </a> </td>
                                                <td> SA.HR1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1011#contact"> الإبتكار في إدارة
                                                        تدريب
                                                        الموارد البشرية وتحقيق الجودة الشاملة </a> </td>
                                                <td> SA.HR1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1012#contact"> فعالية تخطيط وتنمية
                                                        الموارد البشرية بإستخدام الـ BSC </a> </td>
                                                <td> SA.HR1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1013#contact"> الإدارة الإلكترونية
                                                        للقوى البشرية وتخطيط وظائفها وتقييم ادائها e-HRM </a> </td>
                                                <td> SA.HR1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1014#contact"> تطوير مهارات مديري
                                                        الموارد البشرية بإستخدام DACUM </a> </td>
                                                <td> SA.HR1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1015#contact"> مقياس هيرمان للتفكير
                                                        وتطبيقاته على إدارة HR </a> </td>
                                                <td> SA.HR1015 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1016#contact"> الإتجاهات الحديثة في
                                                        الموارد البشرية بإستخدام MBTI </a> </td>
                                                <td> SA.HR1016 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1017#contact"> النماذج الحديثة في
                                                        إعداد
                                                        الهياكل التنظيمية وتحليل الوظائف (متقدم) </a> </td>
                                                <td> SA.HR1017 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1018#contact"> تنمية مهارات أخصائي
                                                        التدريب والتطوير (مدخل إبتكاري) </a> </td>
                                                <td> SA.HR1018 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1019#contact"> المنهج المتكامل
                                                        لمدراء
                                                        الموارد البشرية (متقدم) </a> </td>
                                                <td> SA.HR1019 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1020#contact"> معايير تقييم
                                                        وإستراتجيات
                                                        تطوير جدارات العاملين بالمؤسسات </a> </td>
                                                <td> SA.HR1020 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1021#contact"> مهارات إعداد بطاقات
                                                        الوصف الوظيفي وتصنيف الوظائف </a> </td>
                                                <td> SA.HR1021 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1022#contact"> الطرق الحديثة لقياس
                                                        وتقييم العائد من التدريب </a> </td>
                                                <td> SA.HR1022 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1023#contact"> برنامج المدرب المؤسسي
                                                        المعتمد (TOT) </a> </td>
                                                <td> SA.HR1023 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1024#contact"> تصميم البرامج
                                                        والمناهج
                                                        التدريبية </a> </td>
                                                <td> SA.HR1024 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1025#contact"> البرنامج المتكامل
                                                        لتنمية
                                                        مهارات مدراء ومسؤولي التدريب </a> </td>
                                                <td> SA.HR1025 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1026#contact"> الإستراتيجيات
                                                        المعاصرة
                                                        في تحديد الإحتياجات التدريبية </a> </td>
                                                <td> SA.HR1026 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1027#contact"> الأساليب الحديثة في
                                                        أساليب طرق تحديد تحليل الإحتياجات التدريبية TNA </a> </td>
                                                <td> SA.HR1027 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1028#contact"> الإستراتيجيات
                                                        التدريبية
                                                        الحديثة وإعداد خطط التدريب (مختبر تطبيقي) </a> </td>
                                                <td> SA.HR1028 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HR1029#contact"> ورشة عمل: النظم
                                                        المتقدمة
                                                        لتخطيط ومراقبة أنظمة وسياسات شؤون الموظفين والتطوير الإداري
                                                    </a> </td>
                                                <td> SA.HR1029 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading10">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTen" aria-expanded="false"
                                            aria-controls="collapse10"> قطاع التنمية البشرية وتطوير الذات

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="heading10">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1001#contact"> تقنيات قبعات التفكير
                                                        الست. </a> </td>
                                                <td> SA.HD1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1002#contact"> تكنولوجيا التفكير
                                                        العلمي
                                                        المنظم بإستخدام الكورت (Cort). </a> </td>
                                                <td> SA.HD1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1003#contact"> مهارات التقديم والعرض
                                                        الفعال (مستوى متقدم) </a> </td>
                                                <td> SA.HD1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1004#contact"> مهارات تنمية مهارات
                                                        الذكاء الوجداني للمديرين (مستوى متقدم). </a> </td>
                                                <td> SA.HD1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1005#contact"> تدعيم وتفعيل مهارات
                                                        التفكير الإبداعي وفن صنع القرار الإداري. </a> </td>
                                                <td> SA.HD1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1006#contact"> المهارات الإشرافية
                                                        النموذجية الحديثة (التحديات والفرص). </a> </td>
                                                <td> SA.HD1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1007#contact"> مهارات تنمية
                                                        الإتجاهات
                                                        الإيجابية للموظفين. </a> </td>
                                                <td> SA.HD1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1008#contact"> البرمجة اللغوية
                                                        العصبية
                                                        NLP (وقت الإتصال اللا محدود). </a> </td>
                                                <td> SA.HD1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1009#contact"> التمييز الإبداعي في
                                                        الإقناع والإتصال والتفاوض. </a> </td>
                                                <td> SA.HD1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1010#contact"> مهارات توكيد الذات
                                                    </a>
                                                </td>
                                                <td> SA.HD1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1011#contact"> مهارات التحكم بالذات
                                                        (الذكاء الوجداني). </a> </td>
                                                <td> SA.HD1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1012#contact"> الثقة بالنفس طرقك
                                                        للتميز
                                                        وزيادة الإنتاجية. </a> </td>
                                                <td> SA.HD1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HD1013#contact"> الإتصالات الإدارية
                                                        الفعالة بإستخدام لغة الجسد </a> </td>
                                                <td> SA.HD1013 </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading11">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseEleven" aria-expanded="false"
                                            aria-controls="collapse11"> قطاع السكرتارية وادارة المكاتب

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="heading11">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1001#contact"> مهارات السكرتارية
                                                        المتقدمة. </a> </td>
                                                <td> SA.SM1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1002#contact"> إعداد وكتابة
                                                        المراسلات
                                                        والتقارير </a> </td>
                                                <td> SA.SM1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1003#contact"> تكنولوجيا الأرشيف
                                                        والحفظ
                                                        والفهرسة الإلكترونية. </a> </td>
                                                <td> SA.SM1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1004#contact"> المنظومة المتكاملة
                                                        لأعمال السكرتارية والإدارة المكتبية. </a> </td>
                                                <td> SA.SM1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1005#contact"> حفظ الوثائق والملفات
                                                        والسجلات يدويا والكترونيا </a> </td>
                                                <td> SA.SM1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1006#contact"> الآفاق المستقبلية
                                                        والتحديات المعاصرة لأعمال السكرتارية وإدارة المكاتب. </a>
                                                </td>
                                                <td> SA.SM1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1007#contact"> إدارة المكاتب للإدارة
                                                        العليا والشخصيات الهامة. </a> </td>
                                                <td> SA.SM1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1008#contact"> المهارات الإدارية
                                                        والسلوكية لمدراء المكاتب. </a> </td>
                                                <td> SA.SM1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1009#contact"> سمات وملامح مديري
                                                        مكاتب
                                                        المستقبل. </a> </td>
                                                <td> SA.SM1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1010#contact"> الطرق الحديثة
                                                        بإستخدام
                                                        الحاسب الآلي في الدورات المستندية والمراسلات البريدية لمدراء
                                                        المكاتب </a> </td>
                                                <td> SA.SM1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1011#contact"> إستخدم تكنولوجيا
                                                        المعلومات وشبكات الإتصال في إدارة وتنظيم المكاتب. </a> </td>
                                                <td> SA.SM1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1012#contact"> تطوير المهارات
                                                        الجوهرية
                                                        لمدراء مكاتب الإدارة العليا. </a> </td>
                                                <td> SA.SM1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1013#contact"> المهارات المتقدمة
                                                        لإدارة
                                                        الإجتماعات وكتابة تقاريرها </a> </td>
                                                <td> SA.SM1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1014#contact"> فنون تنظيم المؤتمرات
                                                        والمعارض </a> </td>
                                                <td> SA.SM1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1015#contact"> ورشة عمل التطوير
                                                        المستدام للسكرتير التنفيذي ومدراء المكاتب </a> </td>
                                                <td> SA.SM1015 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.SM1016#contact"> تنمية القدرات
                                                        الإبتكارية
                                                        للمساعدين الإداريين (مستوى متقدم) </a> </td>
                                                <td> SA.SM1016 </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingN12">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwelve" aria-expanded="false"
                                            aria-controls="collapseN12"> قطاع المالية والمحاسبة

                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingN12">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1001#contact"> تطبيق معايير المحاسبة
                                                        الدولية بالقطاع الحكومي (IPSAS). </a> </td>
                                                <td> SA.FA1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1002#contact"> الإتجاهات الحديثة
                                                        لتحول
                                                        الأجهزة الحكومية من الأساس النقدي إلى أساس الإستحقاق. </a>
                                                </td>
                                                <td> SA.FA1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1003#contact"> تطوير وتفعيل دور
                                                        أقسام
                                                        الشؤون المالية في القطاع الحكومي بإستخدام الحاسب الآلي. </a>
                                                </td>
                                                <td> SA.FA1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1004#contact"> إعداد الموازنات
                                                        بالقطاع
                                                        الحكومي (مداخل حديثة). </a> </td>
                                                <td> SA.FA1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1005#contact"> محاسبة التكاليف
                                                        للقطاع
                                                        الحكومى </a> </td>
                                                <td> SA.FA1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1006#contact"> مهارات المحاسبة في
                                                        الحكومة الالكترونية </a> </td>
                                                <td> SA.FA1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1007#contact"> الرقابة المالية في
                                                        الوحدات الحكومية </a> </td>
                                                <td> SA.FA1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1008#contact"> تدقيق المستندات
                                                        المالية
                                                        الحكومية </a> </td>
                                                <td> SA.FA1008 </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> المحاسبة المالية </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1001#contact"> الإستراتيجية
                                                        المتكاملة
                                                        لإعداد الموازنات والتقارير المالية. </a> </td>
                                                <td> SA.FA1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1002#contact"> مهارات إعداد
                                                        الموازنات
                                                        التشغيلية والمالية. </a> </td>
                                                <td> SA.FA1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1003#contact"> مهارات التخطيط المالي
                                                        وإعداد الموازنات التقديرية. </a> </td>
                                                <td> SA.FA1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1004#contact"> إعداد الموازنات كأساس
                                                        للرقابة وتقييم الأداء. </a> </td>
                                                <td> SA.FA1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1005#contact"> التحول من موازنة
                                                        البنود
                                                        إلى موازنة البرامج والأداء. </a> </td>
                                                <td> SA.FA1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1006#contact"> تنمية مهارات قياس
                                                        الارتباط المالي </a> </td>
                                                <td> SA.FA1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1007#contact"> الموازنات التخطيطية
                                                        وتفعيل دور الرقابة. </a> </td>
                                                <td> SA.FA1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1008#contact"> التحليل المالي
                                                        المتقدم
                                                    </a> </td>
                                                <td> SA.FA1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1009#contact"> البرنامج المتكامل في
                                                        إعداد وتحليل القوائم المالية </a> </td>
                                                <td> SA.FA1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1010#contact"> برنامج تطوير الموازنة
                                                        النقدية التقديرية كأساس لتخطيط الربح (منهج تطبيقي). </a>
                                                </td>
                                                <td> SA.FA1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1011#contact"> حوكمة المؤسسات (منظور
                                                        مالي). </a> </td>
                                                <td> SA.FA1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1012#contact"> الإندماج والإستحواذ
                                                        وإعادة الهيكلة. </a> </td>
                                                <td> SA.FA1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1013#contact"> إعداد وتصميم نظم
                                                        التقارير المالية كأساس لتقييم الأداء. </a> </td>
                                                <td> SA.FA1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1014#contact"> معايير التقارير
                                                        المالية
                                                        الدولية في إعداد السجلات المحاسبية وتسوية وإقفال الحسابات
                                                        المالية. </a> </td>
                                                <td> SA.FA1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1015#contact"> تحليل وفحص الميزانيات
                                                        والقراءة النقدية للقوائم المالية </a> </td>
                                                <td> SA.FA1015 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1016#contact"> تطبيقات معايير
                                                        المحاسبة
                                                        الدولية </a> </td>
                                                <td> SA.FA1016 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1017#contact"> تحليل القوائم المالية
                                                        في
                                                        ظل المعايير المحاسبية. </a> </td>
                                                <td> SA.FA1017 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1018#contact"> تنمية المهارات
                                                        المحاسبية
                                                        للعاملين بأقسام المدفوعات والمصروفات. </a> </td>
                                                <td> SA.FA1018 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1019#contact"> تنمية المهارات
                                                        المحاسبية
                                                        للعاملين بأقسام المقبوضات والإيرادات. </a> </td>
                                                <td> SA.FA1019 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1020#contact"> معايير المحاسبة
                                                        الدولية
                                                        IAS ومعايير التقارير المالية الدولية IFRS. </a> </td>
                                                <td> SA.FA1020 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1021#contact"> مهارات إعداد تقارير
                                                        الأداء الشهرية (المالية والإدارية). </a> </td>
                                                <td> SA.FA1021 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1022#contact"> الإتجاهات الدولية
                                                        الحديثة في إدارة أزمات السيولة وإدارة التدفقات النقدية </a>
                                                </td>
                                                <td> SA.FA1022 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.FA1023#contact"> دينامكية التخطيط ووضع
                                                        الميزانيات والتنبؤ المالي </a> </td>
                                                <td> SA.FA1023 </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> المحاسبة الإدارية ومحاسبة التكاليف </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MC1001#contact"> الرقابة على التكاليف
                                                        بإستخدام نظرية مراقبة التكاليف على أساس الأنشطة A.B.C. </a>
                                                </td>
                                                <td> SA.MC1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MC1002#contact"> المحاسبة الإدارية في
                                                        إتخاذ القرارات. </a> </td>
                                                <td> SA.MC1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MC1003#contact"> دليل خفض النفقات
                                                        والتكاليف بالقطاع الحكومي بإستخدام الحاسب الآلي - المحاسبة
                                                        الحكومية </a> </td>
                                                <td> SA.MC1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MC1004#contact"> تصميم وتطوير نظم
                                                        التكاليف في الجهات الحكومية. </a> </td>
                                                <td> SA.MC1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MC1005#contact"> برنامج الأساليب
                                                        الحديثة
                                                        للمحاسبة الإدارية ودورها في تخفيض التكاليف وترشيد الأداء في
                                                        الوحدات الإقتصادية. </a> </td>
                                                <td> SA.MC1005 </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">المراجعة الداخلية والتدقيق</td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1001#contact"> المهارات المتقدمة
                                                        للمدققين. </a> </td>
                                                <td> SA.AU1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1002#contact"> المهارات المتكاملة في
                                                        الرقابة والتدقيق. </a> </td>
                                                <td> SA.AU1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1003#contact"> أدوات التخطيط
                                                        والرقابة
                                                        المالية </a> </td>
                                                <td> SA.AU1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1004#contact"> التدقيق في ضوء
                                                        المعايير
                                                        الدولية. </a> </td>
                                                <td> SA.AU1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1005#contact"> الإتجاهات الحديثة في
                                                        التدقيق الداخلي والرقابة الداخلية. </a> </td>
                                                <td> SA.AU1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1006#contact"> المعايير الحديثة في
                                                        المراجعـة الداخليـة والفحص التحليلي للحســابات </a> </td>
                                                <td> SA.AU1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1007#contact"> مهارات إكتشاف الغش
                                                        والتزوير في المعاملات المالية. </a> </td>
                                                <td> SA.AU1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1008#contact"> المراجعة المالية
                                                        والإدارية لضمان سلامة الأداء المالي والإداري. </a> </td>
                                                <td> SA.AU1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1009#contact"> المراجعة الإدارية
                                                        ودورها
                                                        في الرقابة وإتخاذ القرارات. </a> </td>
                                                <td> SA.AU1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1010#contact"> الإتجاهات الحديثة في
                                                        تدقيق وضبط مخاطر الإحتيال المالي </a> </td>
                                                <td> SA.AU1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.AU1011#contact"> الأساليب الحديثة
                                                        للرقابة
                                                        الداخلية وإعداد التقارير الرقابية (مستوى متقدم). </a> </td>
                                                <td> SA.AU1011 </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> الزكاة والضريبة </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ZT1001#contact"> إعداد الإقرارات
                                                        الزكوية
                                                        والضريبية (ورشة عمل) </a> </td>
                                                <td> SA.ZT1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ZT1002#contact"> الماجستير المهني
                                                        المصغر
                                                        في الزكاة والضريبة </a> </td>
                                                <td> SA.ZT1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ZT1003#contact"> ضريبة القيمة المضافة
                                                        VAT
                                                    </a> </td>
                                                <td> SA.ZT1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ZT1004#contact"> دورة فـقـة ومحاسبة
                                                        زكاة
                                                        الشـركات </a> </td>
                                                <td> SA.ZT1004 </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading13">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseThirteen" aria-expanded="false"
                                            aria-controls="collapseFive"> القطاع المصرفي والتمويل
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThirteen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1001#contact"> تطوير العمل المصرفي
                                                        الإسلامي </a> </td>
                                                <td> SA.BF1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1002#contact"> المتطلبات القانونية
                                                        للتحول للعمل المصرفي الاسلامي </a> </td>
                                                <td> SA.BF1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1003#contact"> التدقيق الشرعي في
                                                        المؤسسات المالية الاسلامية </a> </td>
                                                <td> SA.BF1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1004#contact"> الإئتمان وأنواع
                                                        الإفصاح والإستعداد لتنفيذ متطلبات بازل (2). </a> </td>
                                                <td> SA.BF1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1005#contact"> إدارة المخاطر
                                                        الإئتمانية : الإطار, القياس, الإئتمان المؤسسي. </a> </td>
                                                <td> SA.BF1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1006#contact"> إدارة مخاطر الإئتمان
                                                        للمنشآت الصغيرة والمتوسطة – القروض الإستهلاكية </a> </td>
                                                <td> SA.BF1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1007#contact"> أساسيات التحليل
                                                        الإئتماني. </a> </td>
                                                <td> SA.BF1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1008#contact"> تحليل مخاطر الإئتمان
                                                        للشركات. </a> </td>
                                                <td> SA.BF1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1009#contact"> إدارة ومعالجة الديون
                                                        المتعثرة. </a> </td>
                                                <td> SA.BF1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1010#contact"> المعايير الدولية
                                                        وتطبيقاتها المحلية في مجال مكافحة عمليات غسل الاموال </a> </td>
                                                <td> SA.BF1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1011#contact"> تسويق وبيع المنتجات
                                                        المصرفية المتوافقة مع الشريعة </a> </td>
                                                <td> SA.BF1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1012#contact"> المحاسبة عن الإستثمار
                                                        وإدارة صناديق الإستثمار </a> </td>
                                                <td> SA.BF1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1013#contact"> الكشف عن التزوير فى
                                                        بطاقات الائتمان والدفع الالكترونى </a> </td>
                                                <td> SA.BF1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.BF1014#contact"> إدارة الصكوك والسيولة
                                                        في البنوك الاسلامية </a> </td>
                                                <td> SA.BF1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading14">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseFourteen" aria-expanded="false"
                                            aria-controls="collapseFive">قطاع التأمين
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseFourteen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1001#contact"> البرنامج التأهيلي
                                                        لشهادة أساسيات التأمين IFCE </a> </td>
                                                <td> SA.INS1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1002#contact"> التأمين الطبي </a>
                                                </td>
                                                <td> SA.INS1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1003#contact"> الأساليب الحديثة في
                                                        إدارة التعويضات التأمينية </a> </td>
                                                <td> SA.INS1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1004#contact"> كشف ومكافحة الإحتيال
                                                        في شركات التأمين </a> </td>
                                                <td> SA.INS1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1005#contact"> التأمين الهندسى </a>
                                                </td>
                                                <td> SA.INS1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1006#contact">    التطبيقات الحديثة
                                                        فى التامين التكافلى والتامين التجارى </a> </td>
                                                <td> SA.INS1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1007#contact"> تأمين المنشآت
                                                        النفطية </a> </td>
                                                <td> SA.INS1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1008#contact"> المعايير الإسلامية
                                                        لشركات التأمين الإسلامي </a> </td>
                                                <td> SA.INS1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.INS1009#contact">   أساسيات التسويق
                                                        والبيع التأميني </a> </td>
                                                <td> SA.INS1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>



                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading15">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseFifteen" aria-expanded="false"
                                            aria-controls="collapseFive">قطاع الأمن والصحة والسلامة المهنية
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFifteen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1001#contact"> أنظمة السلامة ومكافحة
                                                        الحرائق وخطط الإخلاء </a> </td>
                                                <td> SA.HS1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1002#contact"> البرنامج الشامل حول
                                                        إدارة أنظمة الأمن والسلامة المتكاملة ومنع الخسائر </a> </td>
                                                <td> SA.HS1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1003#contact"> البرنامج التدريبي
                                                        الشامل في الأمن الصناعي </a> </td>
                                                <td> SA.HS1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1004#contact"> معايير الأوشا
                                                        لإجراءات السلامة والصحة المهنية OSHA </a> </td>
                                                <td> SA.HS1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1005#contact"> دورة النيبوش العامة
                                                        الدولية للسلامة والصحة المهنية NEBOSH </a> </td>
                                                <td> SA.HS1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1006#contact"> الأساليب العلمية
                                                        الحديثة في تطبيق السلامة بمواقع العمل. </a> </td>
                                                <td> SA.HS1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1007#contact"> دارة التقنيات الحديثة
                                                        في أنظمة السلامة ومكافحة الحرائق </a> </td>
                                                <td> SA.HS1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1008#contact"> الإستراتيجيات الحديثة
                                                        في الإسعافات الأولية. </a> </td>
                                                <td> SA.HS1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1009#contact"> تخطيط وتوثيق وتطبيق
                                                        ومراجعة نظام السلامة والصحة المهنية OHSAS 18001. </a> </td>
                                                <td> SA.HS1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.HS1010#contact"> فحص وتقييم نظم
                                                        السلامة والصحة المهنية والإبلاغ. </a> </td>
                                                <td> SA.HS1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading16">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseSixteen" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع أنظمة الجودة
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSixteen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1001#contact"> تأهيل مديري الجودة
                                                        لتطبيق نظم وأساليب إنشاء نظم الجودة. </a> </td>
                                                <td> SA.QS1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1002#contact"> منهج 6 Sigma لتحقيق
                                                        جودة إدارة المشاريع. </a> </td>
                                                <td> SA.QS1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1003#contact"> توكيد الجودة
                                                        للمشروعات الصناعية. </a> </td>
                                                <td> SA.QS1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1004#contact"> إستراتيجية الكايزن
                                                        للتحسين المستمر للجودة </a> </td>
                                                <td> SA.QS1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1005#contact"> القياس المقارن كأداة
                                                        لتطبيق أنظمة الجودة. </a> </td>
                                                <td> SA.QS1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1006#contact"> نظم الجودة الشاملة
                                                        (TOM) والمواصفات العالمية. </a> </td>
                                                <td> SA.QS1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1007#contact"> هندسة العمليات في
                                                        إطار تطبيق إدارة الجودة الكلية. </a> </td>
                                                <td> SA.QS1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1008#contact"> مبادئ البنية التحتية
                                                        للجودة </a> </td>
                                                <td> SA.QS1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.QS1009#contact"> الفنيات الحديثة في
                                                        مراقبة الجودة </a> </td>
                                                <td> SA.QS1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading17">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseSeventeen" aria-expanded="false"
                                            aria-controls="collapseFive"> القطاع القانوني
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeventeen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1001#contact"> المهارات القانونية
                                                        لغير القانونيين. </a> </td>
                                                <td> SA.LE1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1002#contact"> شرح نظام العمل
                                                        السعودي (التعديلات الأخيرة) </a> </td>
                                                <td> SA.LE1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1003#contact"> أصول التفسير القانوني
                                                        وكتابة المذكرات القانونية. </a> </td>
                                                <td> SA.LE1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1004#contact"> العقود الإدارية
                                                        وآثارها. </a> </td>
                                                <td> SA.LE1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1005#contact"> إعداد العقود وأعمال
                                                        الطرح وتقييم العطاءات والترسية. </a> </td>
                                                <td> SA.LE1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1006#contact"> كتابة وصياغة العقود
                                                        والمناقصات التجارية. </a> </td>
                                                <td> SA.LE1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1007#contact"> إعداد وإدارة
                                                        المناقصات والعقود. </a> </td>
                                                <td> SA.LE1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1008#contact"> القواعد القانونية في
                                                        العقود والأخطاء الشائعة. </a> </td>
                                                <td> SA.LE1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1009#contact"> عقود الفيديك والتحكم
                                                        – البرنامج العملي الشامل لإستخدام الشروط التعاقدية والتحكم. </a>
                                                </td>
                                                <td> SA.LE1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1010#contact"> المعايير الحديثة في
                                                        الكتابة والترجمة للعقود والمذكرات القانونية. </a> </td>
                                                <td> SA.LE1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1011#contact"> مهارات التفسير
                                                        القانوني وصياغة ومتابعة الإجراءات القانونية. </a> </td>
                                                <td> SA.LE1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1012#contact"> تنمية المهارات
                                                        القانونية للعاملين في مجال التأمين وعقودها. </a> </td>
                                                <td> SA.LE1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.LE1013#contact"> إجراءات التحقيق
                                                        الإداري </a> </td>
                                                <td> SA.LE1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading18">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseEighteen" aria-expanded="false"
                                            aria-controls="collapseFive">قطاع المشتريات والمخازن
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEighteen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1001#contact"> إدارة سلسلة الإمداد
                                                        التمويني (SCM). </a> </td>
                                                <td> SA.PS1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1002#contact"> الإدارة اللوجيستية
                                                        وتحسين سلسلة التوريد والنظم المعاصرة للتخطيط والرقابة على
                                                        التخزين. </a> </td>
                                                <td> SA.PS1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1003#contact"> الإدارة اللوجيستية
                                                        للمواد وفقاً لمدخل إدارة الجودة الشاملة. </a> </td>
                                                <td> SA.PS1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1004#contact"> إدارة المواد والرقابة
                                                        على المخزون </a> </td>
                                                <td> SA.PS1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1005#contact"> برنامج أساليب تقييم
                                                        الموردين طبقاً لنظم الجودة الكلية. </a> </td>
                                                <td> SA.PS1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1006#contact"> المهارات المتكاملة في
                                                        إدارة المستودعات ومراقبة المخزون </a> </td>
                                                <td> SA.PS1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1007#contact"> التفاوض التعاقدي
                                                        وإعداد وتقييم المناقصات وإبرام العقود. </a> </td>
                                                <td> SA.PS1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1008#contact"> مهارات إعداد ودراسة
                                                        المناقصات </a> </td>
                                                <td> SA.PS1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1009#contact"> إدارة المشتريات
                                                        والمخازن في إطار النظام اللوجستي. </a> </td>
                                                <td> SA.PS1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1010#contact"> برنامج الأسس العلمية
                                                        الحديثة في جرد المخازن لمنع أعمال الغش والإختلاس. </a> </td>
                                                <td> SA.PS1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1011#contact"> إستراتيجيات إدارة
                                                        العهد في الجهات الحكومية </a> </td>
                                                <td> SA.PS1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1012#contact"> الاتجاهات الحديثة في
                                                        إدارة المشتريات الحكومية </a> </td>
                                                <td> SA.PS1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1013#contact"> الإجراءات الحديثة
                                                        لأنظمة العقود والمناقصات الحكومية </a> </td>
                                                <td> SA.PS1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1014#contact"> استراتيجيات مكافحة
                                                        الفساد والحد من مخاطر الإحتيال في منظومة المشتريات </a> </td>
                                                <td> SA.PS1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1015#contact"> مهارات إدارة
                                                        المشتريات وتقنيات توفير التكاليف </a> </td>
                                                <td> SA.PS1015 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PS1016#contact"> التفاوض الفعال واعداد
                                                        عقود الشراء والتوريد </a> </td>
                                                <td> SA.PS1016 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading19">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseNinteen" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع التسويق والمبيعات
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNinteen" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MS1001#contact"> تنمية المهارات
                                                        البيعية والتسويقية </a> </td>
                                                <td> SA.MS1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MS1002#contact"> تطوير مهارات إعداد
                                                        خطط التسويق والمبيعات الفعالة. </a> </td>
                                                <td> SA.MS1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MS1003#contact"> مهارات تخطيط ومراقبة
                                                        وتقييم الأنشطة التسويقية والبيعية. </a> </td>
                                                <td> SA.MS1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MS1004#contact"> المهارات القيادية
                                                        لمدراء التسويق. </a> </td>
                                                <td> SA.MS1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MS1005#contact"> التسويق الإلكتروني
                                                        E-Marketing </a> </td>
                                                <td> SA.MS1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.MS1006#contact"> أساليب تحليل
                                                        المنافسين وتحليل السياسات التسويقية. </a> </td>
                                                <td> SA.MS1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading20">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwinty" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع خدمة العملاء والتعامل مع الجمهور
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwinty" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1001#contact"> مهارات الإتصال الفعال
                                                        (مستوى متقدم) </a> </td>
                                                <td> SA.PC1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1002#contact"> مهارات التفاوض الفعال
                                                        (مستوى متقدم) </a> </td>
                                                <td> SA.PC1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1004#contact"> مهارات العرض والتقديم
                                                        الفعال (مستوى متقدم) </a> </td>
                                                <td> SA.PC1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1006#contact"> مهارات التعامل مع
                                                        كبار الشخصيات. </a> </td>
                                                <td> SA.PC1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1008#contact"> التعامل مع شكاوى
                                                        وإعتراضات العملاء. </a> </td>
                                                <td> SA.PC1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1009#contact"> فنون التميز في خدمة
                                                        العملاء والمراجعين. </a> </td>
                                                <td> SA.PC1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1011#contact"> مهارات التعامل مع
                                                        الشخصيات المتنوعة والصعبة. </a> </td>
                                                <td> SA.PC1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PC1012#contact"> المدخل المتكرر لإدارة
                                                        التغيير ومهارات التطوير الذاتي المستمر محاور ومفاتيح النجاح.
                                                    </a> </td>
                                                <td> SA.PC1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading21">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwintyOne" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع العلاقات العامة والإعلام
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwintyOne" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1001#contact"> ورشة عمل (الإعلام
                                                        الجديد) </a> </td>
                                                <td> SA.PR1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1002#contact"> تنمية مهارات مشرفي
                                                        الخدمات والعلاقات العامة. </a> </td>
                                                <td> SA.PR1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1003#contact"> مهارات إعداد وتنظيم
                                                        الإجتماعات واللجان الإعلامية. </a> </td>
                                                <td> SA.PR1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1004#contact"> رؤية جديدة في فنون
                                                        ومهارات التعامل مع وسائل الإعلام (السهل الممتنع). </a> </td>
                                                <td> SA.PR1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1005#contact"> فن الإدارة الإعلامية
                                                        للأزمات والكوارث. </a> </td>
                                                <td> SA.PR1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1006#contact"> الإدارة التنفيذية
                                                        والتخطيط الإستراتيجي للعلاقات العامة والإعلام (مختبرعملي) </a>
                                                </td>
                                                <td> SA.PR1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1007#contact"> التميز في صناعة الأسس
                                                        العلمية والعملية لإدارة العلاقات العامة والإعلام. </a> </td>
                                                <td> SA.PR1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1008#contact"> التميز والإبتكار في
                                                        العلاقات العامة والإتصالات المؤسسية. </a> </td>
                                                <td> SA.PR1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1009#contact"> العلاقات العامة
                                                        وبروتوكول التشريفات وفن التعامل مع الجمهور وكبار الشخصيات </a>
                                                </td>
                                                <td> SA.PR1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1010#contact">  مهارات التحرير و
                                                        الإخراج الصحفي للعاملين في العلاقات العامة </a> </td>
                                                <td> SA.PR1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1011#contact"> تطوير وتفعيل دور
                                                        إدارات العلاقات العامة في المؤسسات الحكومية </a> </td>
                                                <td> SA.PR1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1012#contact"> ادارة العلاقات العامة
                                                        والاعلام من خلال متغيرات العولمة و تكنولوجيا المعلومات  </a>
                                                </td>
                                                <td> SA.PR1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.PR1013#contact"> التقنيات الحديثة
                                                        لمنهجية العلاقات العامة وفقا لمعايير الأيزو العالمية </a> </td>
                                                <td> SA.PR1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading22">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwintyTwo" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع النقل والمواصلات
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwintyTwo" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1001#contact"> البرنامج المتقدم في
                                                        تخطيط وإدارة حركة النقل والمواصلات </a> </td>
                                                <td> SA. TR1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1002#contact"> تخطيط الصيانة لوسائل
                                                        النقل والمواصلات </a> </td>
                                                <td> SA. TR1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1003#contact"> الإشراف على ورش
                                                        المركبات والشاحنات </a> </td>
                                                <td> SA. TR1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1004#contact"> ورشة عمل أنظمة النقل
                                                        الذكي </a> </td>
                                                <td> SA. TR1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1005#contact"> الأساليب الحديثة في
                                                        إدارة اللوجستيات والنقليات </a> </td>
                                                <td> SA. TR1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1006#contact"> المهارات الحديثة في
                                                        إدارة وتنظيم ومراقبة النقل والشاحنات </a> </td>
                                                <td> SA. TR1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1007#contact"> إدارة خدمات النقل
                                                        والحركة </a> </td>
                                                <td> SA. TR1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TR1008#contact"> الإدارة الإستراتيجية
                                                        والتخطيط في الشبكة اللوجستية للنقل والإمداد </a> </td>
                                                <td> SA. TR1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading23">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwintyThree"
                                            aria-expanded="false" aria-controls="collapseFive"> القطاع التربوي والتعليمي
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwintyThree" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1001#contact"> التأهيل المتكامل
                                                        لخبير معتمد في إدارة المؤسسات التعليمية. </a> </td>
                                                <td> SA.ED1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1002#contact"> إجراءات تطوير جودة
                                                        المعلم من منظور تنموي. </a> </td>
                                                <td> SA.ED1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1003#contact"> الأساليب الإبتكارية
                                                        والإبداعية في طرق التدريس للتعليم الجامعي </a> </td>
                                                <td> SA.ED1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1004#contact"> التخطيط الإستراتيجي
                                                        في المؤسسات التربوية. </a> </td>
                                                <td> SA.ED1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1005#contact"> التقييم في المجال
                                                        التعليمي طبقاً للنموذج الأوربي. </a> </td>
                                                <td> SA.ED1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1006#contact"> برنامج الجودة الشاملة
                                                        في المؤسسات التربوية والتعليمية </a> </td>
                                                <td> SA.ED1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1007#contact"> الإشراف وتقييم أداء
                                                        العاملين في المجال التربوي </a> </td>
                                                <td> SA.ED1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1008#contact"> قیادة التغییر وصیاغة
                                                        إستراتیجیات المستقبل </a> </td>
                                                <td> SA.ED1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.ED1009#contact"> إدارة الأداء وقيادة
                                                        التحول الاستراتيجي للقيادات التعليمية </a> </td>
                                                <td> SA.ED1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading24">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwintyFour" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع تقنية المعلومات IT
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwintyFour" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. IT1001#contact"> ITIL Foundation </a>
                                                </td>
                                                <td> SA. IT1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. IT1002#contact"> TOGAF </a> </td>
                                                <td> SA. IT1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. IT1003#contact"> البرنامج الشامل فى
                                                        أمن وحماية المعلومات </a> </td>
                                                <td> SA. IT1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. IT1004#contact"> دورة الهكر الاخلاقي
                                                        CEH V9 </a> </td>
                                                <td> SA. IT1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. IT1005#contact"> CCNA Security </a>
                                                </td>
                                                <td> SA. IT1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. IT1006#contact"> Mobile App
                                                        development </a> </td>
                                                <td> SA. IT1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>


                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading25">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwintyFive" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع الإدارة الصناعية
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseTwintyFive" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1001#contact"> البرنامج التدريبي
                                                        الشامل فى التكنولوجيا الحديثة فى حفر الآبار </a> </td>
                                                <td> SA. TE1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1002#contact"> السلامة في عمليات
                                                        الحفر والإنتاج بحقول البترول </a> </td>
                                                <td> SA. TE1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1003#contact"> البرنامج التدريبي
                                                        الشامل في عمليات الحفر الاساسية واستكمال صيانة الابار </a> </td>
                                                <td> SA. TE1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1004#contact"> إعداد وتأهيل فني حفر
                                                        الآبار المعدنية والبترولية </a> </td>
                                                <td> SA. TE1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1005#contact"> المشكلات المتكررة في
                                                        مجال حفر الآبار وآليات حلها </a> </td>
                                                <td> SA. TE1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1006#contact"> ضاغطات الهواء والغاز
                                                        (التشغيل والصيانة) </a> </td>
                                                <td> SA. TE1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1007#contact"> الاعداد الفنى
                                                        والمهنى للعاملين فى ادارة الانتاج </a> </td>
                                                <td> SA. TE1007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1008#contact"> تخطيط الانتاج فى ضوء
                                                        المعايير والمتغيرات العالمية </a> </td>
                                                <td> SA. TE1008 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1009#contact"> تخطيط المشروعات
                                                        الصناعية </a> </td>
                                                <td> SA. TE1009 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1010#contact"> المواصفات القياسية
                                                        العالمية الحديثة ISO9000 </a> </td>
                                                <td> SA. TE1010 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1011#contact"> الصيانة الوقائية
                                                    </a> </td>
                                                <td> SA. TE1011 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1012#contact"> التحكم الصناعي
                                                        المتخصص PLC </a> </td>
                                                <td> SA. TE1012 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1013#contact"> التميز والموثوقية في
                                                        الممارسات الهندسية </a> </td>
                                                <td> SA. TE1013 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. TE1014#contact"> الممارسة الإشعاعية
                                                        RPO </a> </td>
                                                <td> SA. TE1014 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading26">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwintySix" aria-expanded="false"
                                            aria-controls="collapseFive"> قطاع المكتبات والبحث العلمي
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwintySix" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. LS1001#contact"> كيفية تسويق خدمات
                                                        المعلومات في المكتبات ومراكز المعلومات </a> </td>
                                                <td> SA. LS1001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. LS1002#contact"> تنمية المهارات
                                                        البحثية لأخصائي مركز التعلم </a> </td>
                                                <td> SA. LS1002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. LS1003#contact"> العلاقات العامة
                                                        وعناصر الاتصال لأخصائى المكتبات </a> </td>
                                                <td> SA. LS1003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. LS1004#contact"> إستخدام تكنولوجيا
                                                        المعلومات وشبكات الإتصال في إدارة وتنظيم المكاتب </a> </td>
                                                <td> SA. LS1004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. LS1005#contact"> إدارة المعرفة
                                                        والإدارة الإلكترونية وتحدياتها </a> </td>
                                                <td> SA. LS1005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA. LS1006#contact"> مناهج البحث العلمي
                                                        واعداد الرسائل العلمية </a> </td>
                                                <td> SA. LS1006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	#contact"> </a> </td>
                                                <td> </td>
                                            </tr>

                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading27">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseTwintySeven"
                                            aria-expanded="false" aria-controls="collapseFive"> قطاع الملكية الفكرية
                                            وبراءة الإختراع
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseTwintySeven" class="panel-collapse collapse show-div" role="tabpanel"
                                    aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                        <table width="100%" dir="rtl">
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10001#contact"> البرنامج التدريبي
                                                        الشامل في الملكية الفكرية وبراءة الاختراع </a> </td>
                                                <td> SA.IP10001 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10002#contact"> الجوانب التجارية
                                                        المتعلقة بالملكية الفكرية </a> </td>
                                                <td> SA.IP10002 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10003#contact"> العلامات التجارية –
                                                        مفهومها وأهميتها وإجراءات تسجيلها </a> </td>
                                                <td> SA.IP10003 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10004#contact"> إدارة العلامات
                                                        التجارية من الناحية التسويقية </a> </td>
                                                <td> SA.IP10004 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10005#contact"> الحماية ضد أعمال
                                                        المنافسة غير المشروعة في الملكية </a> </td>
                                                <td> SA.IP10005 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10006#contact"> الملكية الفكرية
                                                        والتجارة الإلكترونية </a> </td>
                                                <td> SA.IP10006 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10007#contact"> التحكيم في نزاعات
                                                        الملكية الفكرية </a> </td>
                                                <td> SA.IP10007 </td>
                                            </tr>
                                            <tr>
                                                <td> <a href="contact.php?reg=	SA.IP10008#contact"> المعاهدات
                                                        والاتفاقيات الدولية في الملكية الفكرية </a> </td>
                                                <td> SA.IP10008 </td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#our_courses').addClass('active');
    </script>
@endsection
