@extends('layouts.front.home')

@section('css')

@endsection

@section('content')
<style>
  .content {
    display: grid;
    grid-template-columns: 1% 90% 1%;
    grid-template-rows: max-content auto max-content;
  }

  .header {
    grid-column-start: 2;
    text-align: center;
  }

  .Detials {
    grid-column-start: 2;
    grid-row-start: 3;
  }

  .hr {
    grid-row-start: 2;
    grid-column-start: 2;
    border: 1px inset black;
    box-shadow: 2px 2px 4px grey;
  }

  .body {
    border: 2px outset;
    padding: 10px;
    border-radius: 10px;
  }

  /*************************************************************Style Button****************************************** */
  .face-button {
    height: 64px;
    display: inline-block;
    border: 3px solid #4b92fa;
    font-family: "Roboto", sans-serif;
    font-size: 20px;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    color: #0d6efd;
    overflow: hidden;
    border-radius: 30px;
  }

  .face-button .icon {
    margin-right: 6px;
  }

  .face-button .face-primary,
  .face-button .face-secondary {
    display: block;
    padding: 0 32px;
    line-height: 64px;
    transition: margin 0.4s;
    direction: ltr;
  }

  .face-button .face-primary {
    background-color: #0d6efd;
    color: #fff;
  }

  .face-button:hover .face-primary {
    margin-top: -64px;
  }

  /***************************************************Finish Style Button**************************************************** */
</style>
<section>
  <div class="container">
    @isset($lesson)
    @include('flash::message')
      <h2 class="my-3 text-center"><bdi dir="ltr">{{$course->title}} : إسم الكورس</bdi></h2>
      <div class="body">
        <span style="font-size: 30px;margin: 15px;" class="my-2"><bdi dir="ltr">{{$lesson->title}} : إسم الدرس</bdi></span>
        <div class="content justify-content-center">

          <div class="header">
            <video width="350" controls ontimeupdate="myFunction(event)">
              <source src="{{asset($lesson->video)}}" type="video/mp4">
              Your browser does not support HTML video.
            </video>
          </div>

          <div class="hr my-3"></div>

          <div class="Detials">
            <div class="d-flex justify-content-around align-items-center">
              <div class="w-75">
                <h1>{{$lesson->description}}</h1>
              </div>
              <div class="w-25 text-center">
                <a class="face-button" href="{{url('lesson/download/file', $lesson->id)}}">

                  <div class="face-primary">
                    <span class="icon fa fa-cloud"></span>
                    تنزيل الملف
                  </div>
                  <div class="face-secondary">
                    <span class="icon fa fa-hdd-o"></span>
                    52 kt pdf
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endisset
      @include('lessonsDetialsMore')
    </div>
  </section>

@endsection

@section('script')
<script>
var eventDone = true;
function myFunction(event){
    const time90 =  (event.target.duration / 100) * 90;
    if(time90 < event.target.currentTime && eventDone){
        eventDone = false;
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{url('lesson/details',$lesson['id'])}}",
            method: "GET",
            data: {
                _token:_token
            },
            success: function(result,status,xhr) {
                console.log(result)
            },
            error: function(xhr,status,error){
                console.log(error)
                console.log(xhr)
                console.log(status)
            }
        });
    }

}
</script>
@endsection
