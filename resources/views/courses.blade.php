@extends('layouts.front.home')

@section('css')
<style>
    .footer {
        position: absolute !important;
        bottom: 0px;
        width: 100%;
    }
</style>
@endsection

@section('content')
<section id="services" class="services">
    <section class="allCourses">
        <div class="container">
            @include('flash::message')
            @if ((int)$id === 1)
            <h1 style="margin: 0px;">معهد اطمئن للتدريب</h1>
            <h3>تضم مجموعة اطمئن معهد اطمئن للتدريب المعتمد من المؤسسة العامة للتدريب التقني والمهني تأسس من قبل خبراء ومبدعين وشراكات متنوعة التخصصات تطبق أعلى معاير الجودة العالمية، يركز معهد اطمئن على تقديم خدماته للقطاعات الثلاثة الحكومية والاجتماعية والقطاع الخاص وفق معايير جودة خاصة، بهدف الإسهام في عملية التطوير المؤسسي وللتوافق مع توجهات التنمية في المملكة العربية السعودية.</h3>
            @elseif ((int)$id === 3)
            <h1 style="margin: 0px;">مركز اطمئن للإرشاد الأسري</h1>
            <h3>مركز معتمد من وزارة الموارد البشرية والتنمية الاجتماعية متخصص في تقديم خدمات الإرشاد النفسي والاجتماعي والتربوي وتنمية الفكر وتعديل السلوك من خلال أسس علمية مهنية، كما يهتم بتقديم الخدمات الارشادية النفسية والاسرية والاجتماعية والتربوية ويعدل من المفاهيم الخاطئة لبناء الاسرة للمساعدة في إحداث تغيير إيجابي في سلوكيات واتجاهات المجتمع.</h3>
            @elseif ((int)$id === 2)
            <h1 style="margin: 0px;">معهد اطمئن للغات</h1>
            <h3>أنشئت مجموعة اطمئن معهد للغات ومهارات المحادثة المعتمد من وزارة التعليم، إيماناً منها بأن اللغة الإنجليزية في عالم اليوم تعد أداة تواصل بين الشعوب والثقافات، ومن يتعلمها تساعده على الاتصال مع الآخر والتلقي منه، كما تعينه على الاستجابة لتحديات العصر من علوم ومعرفة تكنولوجية، نسعى إلى تقديم برامج تدريبية ذات جودة عالية تمكن المشاركين من اكتساب مهارات اللغات (استماع ومحادثة وقراءة، وكتابة) وإبراز هذه المهارات في الحصول على المعرفة العلمية وتطبيقها في شتى نواحي الحياه </h3>
            @endif
            <div class="row">
                @isset($courses)
                    @foreach($courses as $course)
                    <div class="col-md-4">
                        <div class="card" style="height:max-content;">
                            <img src="{{asset($course->photo)}}" class="card-img-top" style="max-height:30vh;">
                            <div class="card-body">
                                <h5 class="card-title">{{$course->title}}</h5>
                                <div class="courseDescription">
                                    <div class="hours">{{$course->duration}}</div>
                                    <div class="price">{{$course->price}} ريال </div>
                                </div>
                                <p class="card-text description" id="discription-{{$course->id}}" style="display: inline;">
                                    {{$course->description}}
                                </p>
                                <a class="stretched-link text-danger" style="position: relative;display: inline;cursor : pointer" id="discription-{{$course->id}}" onclick="toggleContent({id})">Read More</a>
                                <div class="d-block">
                                    <a href="{{route('course/details', $course->id)}}" class="btn btn-primary w-50" style="width: 45%;">التفاصيل</a>
                                    @if(Auth::user())
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#BookingCourse-{{$course->id}}" style="width: 45%;" data-id="{{$course->id}}">
                                        إشتراك
                                    </button>
                                    @else
                                    <button class="btn btn-success registrationModal" data-bs-toggle="modal" data-bs-target="#Registration-{{$course->id}}" style="width: 45%;" data-id="{{$course->id}}">
                                        إشتراك  
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Booking Modal -->
                    <div class="modal fade" id="BookingCourse-{{$course->id}}" tabindex="-1" aria-labelledby="BookingCourse" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form method="POST" action="{{url(route('course/register'))}}">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">تأكيد الإشتراك بكورس</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <input type="hidden" id="course_id" name="course_id" value="{{$course->id}}">
                                            <span style="text-align:center;font-size: 20px;">{{$course->title}}</span> 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                                        <button type="submit" class="btn btn-primary">إشتراك</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Registration Modal -->
                    <div class="modal fade" id="Registration-{{$course->id}}" tabindex="-1" aria-labelledby="Registration" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form method="POST" action="{{url(route('course/register'))}}">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">إشتراك</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <input type="hidden" id="course_id" name="course_id" value="{{$course->id}}">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>الاسم رباعى *</label><!--pattern="^[A-Za-z ]{5,}"-->
                                                    <input type="text" id="name" name="name" class="form-control" required autocomplete="off" placeholder="برجاء كتابة الاسم رباعى">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>رقم الهويه *</label><!--pattern="[0-9a-zA-z]{5,}"-->
                                                    <input type="text" id="id" name="id_number" class="form-control" required autocomplete="off" placeholder="برجاء كتابة رقم الهوية السعودى">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>البريد الالكترونى *</label>
                                                    <input type="text" id="email" name="email" class="form-control" required autocomplete="off" placeholder="برجاء كتابة البريد الالكترونى">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>رقم الجوال *</label><!--pattern="[0-9]{5,}"-->
                                                    <input type="text" id="phone" name="phone" class="form-control" required autocomplete="off" placeholder="برجاء كتابة رقم الجوال">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>الجنس *</label>
                                                    <select class="form-control" name="gender" required>
                                                        <option selected disabled>اختار الجنس</option>
                                                        <option value="1">ذكر</option>
                                                        <option value="2">انثى</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                                        <button type="submit" class="btn btn-primary">إشتراك</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
    //$('footer').addClass('short_data')
    $('#ourSectionsItem').addClass('active');
    // $(document).on('click', '.registrationModal', function() {
    //     var id = $(this).attr('data-id');
    //     $('#course_id').val(id);
    // });
    var discription = $("p.description");
    var limit2 = 100;
    var discriptions = [];
    var discriptionsID = [];
    var limit = "";
    var content = "";
    var isContentToggled = [];
    var numtab;
    for (var i = 0; i < discription.length; i++) {

        discriptions.push(discription[i].innerHTML);
        discriptionsID.push(discription[i].id.split('-')[1]);
        isContentToggled.push(true);
        limit = discription[i].innerHTML.substr(0, limit2).lastIndexOf(' ');
        content = `${this.discription[i].innerHTML.substr(0, this.limit)}...`;
        document.getElementById(discription[i].id).innerHTML = content;
    }

    function toggleContent(id) {

        const arrayid = id.id.split('-');
        var arrayindex = discriptionsID.indexOf(arrayid[1])

        if (isContentToggled[arrayindex]) {
            $(`a#${id.id}`).html("Read Less");
            isContentToggled[arrayindex] = false;
        } else {
            $(`a#${id.id}`).html('Read More');
            isContentToggled[arrayindex] = true;
        }
        //*
        this.limit = this.discriptions[arrayindex].substr(0, this.limit2).lastIndexOf(' ');

        isContentToggled[arrayindex] ? $(`p#${id.id}`).html(`${discriptions[arrayindex].substr(0, this.limit)}...`) :
            $(`p#${id.id}`).html(discriptions[arrayindex]);

    }
</script>
@endsection