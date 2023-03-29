@extends('layouts.front.home')

@section('content')
<style>
  .Key{
    color: darkgreen;
    font-weight: bolder;
    font-size: large;
    text-shadow: 1px 1px 2px;
  }
  .mainKey{
    font-weight: bolder;
    color: #4969a5;
    text-shadow: 2px 2px 4px;
    font-size: larger;
  }
  .textNormal{
    color: black;
    font-size: initial;
    font-weight: bold;
  }
</style>
    
    <section id="services" class="services position-relative">
      <div style="background-image: url(/front/img/slider/cover-header3.jpg);background-size: cover;position: absolute;width: 100%;height: 100%;opacity: .1;"></div>
      <div class="container" style="margin-bottom: 40px;">
          <h2 style="padding-top: 20px;">تفاصيل الدوره</h2>
          <div class="card mb-3 mt-5" style="height: max-content;background: none;border: 2px solid;border-radius: 15PX;padding: 10px;">
            @include('flash::message')
                @isset($course)
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex flex-column">
                    <h4 class="card-title" style="text-align: center;color: cornflowerblue;font-weight: bolder;">
                            <p style="margin-left:5vw;"><span class="mainKey">اسم : </span>{{$course->title}}</p>
                            <p style="margin-left:5vw;"><span class="mainKey"> اسم المدرب : </span>{{optional($course->user)->name}}</p>
                            </h4>
                            <h3 class="fst-italic text-center">السعر : {{$course->price}}<span class="fs-6">ريال</span></h3>
                            <!-- <a href="{{$course->link}}"  target="_blank" class="btn btn-success" style="width: 90%;">تسجيل الان</a> -->
                            
                            @if(Auth::user())
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#BookingCourse" style="width: 45%;" data-id="{{$course->id}}">
                                    إشتراك
                                </button>
                            @else
                                <button class="btn btn-success registrationModal" data-bs-toggle="modal" data-bs-target="#Registration" style="width: 45%;" data-id="{{$course->id}}">
                                    تسجيل
                                </button>
                            @endif
                            </div>
                            <img class="card-img-top" src="{{asset($course->photo)}}"
                            alt="Card image cap" style="height: fit-content;width: fit-content;max-width: 50%;max-height: 50%;border: 3px inset;
                            border-radius: 10px;min-width: 40vw;min-height: 40vh;">
                            </div>
                    <div class="card-body">
                        <p class="card-text textNormal"><span class="Key">تفاصيل : </span> {{$course->description}}</p>
                        <!-- <p class="card-text"><span class="Key">السعر : </span>{{$course->price}}</p> -->
                        <p class="card-text textNormal"><span class="Key">نبذه عن المدرب : </span>{{$course->user_desc}}</p>
                        <p class="card-text textNormal"><span class="Key">مده التدريب : </span>{{$course->duration}}</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated </small></p> -->
                    </div>
                @endisset
            </div>
        </div>
    </section>
    <!-- Booking Modal -->
    <div class="modal fade" id="BookingCourse" tabindex="-1" aria-labelledby="BookingCourse" aria-hidden="true">
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
    <div class="modal fade" id="Registration" tabindex="-1" aria-labelledby="Registration" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form method="POST" action="{{url(route('course/register'))}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تسجيل</h5>
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
                                        <input type="text" id="id" name="id_number" class="form-control" required autocomplete="off" 
                                        placeholder="برجاء كتابة رقم الهوية السعودى">
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
                                        <input type="text" id="phone" name="phone" class="form-control" required autocomplete="off"
                                        placeholder="برجاء كتابة رقم الجوال">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
    //   $(document).on('click', '.registrationModal', function() {
    //       var id = $(this).attr('data-id');
    //       $('#course_id').val(id);
    //   });
        // $('#ourSectionsItem').addClass('active');
        // $('footer').addClass('short_data')
    </script>
@endsection
