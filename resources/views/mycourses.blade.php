@extends('layouts.front.home')

@section('content')

<section>
  <div class="accordion" id="accordionExample">
    @if(isset($courses))
      @if(count($courses) > 0)
        @foreach($courses as $course)
            @php
                $booking = \App\Models\Booking::where("user_id" ,auth()->user()->id)->where("course_id" , $course->id)->first();
            @endphp
          <div class="card">
            <div class="card-header" id="heading-{{$course->id}}">
              @include('flash::message')
               <div class="d-flex justify-content-between align-items-center">
                <div>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-{{$course->id}}" aria-expanded="true" aria-controls="collapse-{{$course->id}}">
                  {{$course->title}}
                </button>
                    <p class="d-inline text-warning"> ( {{$booking->uuid_completed  == null ? "غير مكتمل"  :  "مكتمل"}} ) </p>
                    </div>
                  @if($booking->uuid_completed  == null)
                      <a class="text-info" href="#"> يجب اكمال الدوره لاداء الاختبار </a>

                  @else
                  <div>
                      <a class="text-dark text-blink btn btn-primary" style="margin-left:10px;color:white !important;" href="{{route('course/mycourses/quiz',$course->id)}}"> اداء الاختبار </a>
                      <p style="display: inline;color: red">درجة الاختبار  : {{$booking->raw}} </p>
                  </div>
                  @endif

                   @if($booking->certification)
                       <a class="text-success" target="_blank" href="{{route("certifications" ,[$booking->user_id,$booking->course_id])}}"> تحميل الشهاده </a>
                   @else
                   @endif

                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalrate-{{$course->id}}">
                      تقيم الدوره
                  </button>
               </div>
            </div>

            <div id="collapse-{{$course->id}}" class="collapse show" aria-labelledby="heading-{{$course->id}}" data-parent="#accordionExample">
              <div class="card-body">
                <div class="d-flex justify-content-center">
                  @isset($lessons[$course->title])
                    @foreach($lessons[$course->title] as $lesson)
                      <a class="btn btn-sm btn-@if(
            \App\Models\BookingLessons::where("user_id",auth()->user()->id)->where("course_id" ,$course->id)->where("lesson_id" , $lesson['id'])->whereNotNull("uuid_watched")->first()
    )success @elseif(true)primary @endif mx-3" target="blank" href="{{url('lesson/details',$lesson['id'])}}">{{$lesson['name']}}</a>
                    @endforeach
                  @endisset
                </div>
              </div>
            </div>
          </div>
              <div class="modal fade" id="myModalrate-{{$course->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">تقيم الدوره</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form role="form" action="{{route("course/student/courses/rate" , $course->id )}}">
              <div class="form-group">
                <label class="col-form-label pt-0"><span>*</span> التقيم من 0 ل 10</label>
                <input class="form-control" name="rate" type="number" required="" max="10" maxlength="2" min="0" minlength="1">
              </div>

              <div class="form-group">
                <label class="col-form-label pt-0"><span>*</span> تقيم الدوره</label>
                <textarea class="form-control" name="review" rows="5" type="text" required=""></textarea>
              </div>
              <div class="form-group text-center align-content-center">
                <input class="btn btn-primary" type="submit" value="ارسال">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
        @endforeach
      @else
      <div style="text-align: center;">لا يوجد كورسات .. او لم يتم التفعيل بعد</div>
      @endif
    @endif

  </div>
</section>

@endsection

@section('script')
<script>

</script>
@endsection

@section("css-custom")
    <style>

    </style>
@endsection
