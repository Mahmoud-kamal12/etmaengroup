@extends('layouts.front.home')

@section('content')

    <section class="login">
        <div class="container">
            <div class="row">
                @include('flash::message')
                <div class="col-8">
                    @isset($file)
                        <div class="media border p-3">
                            <!-- <img src="{{asset('front/img/person.jpg')}}" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                            <div class="media-body">
                                <h4>المدرب ( {{$file[0]->admin_name}} ) <small><i>ارفق ملف الي مجموعه ( {{$file[0]->group_name}} ) بتاريخ <br> {{$file[0]->created_at}}</i></small></h4>
                                <a href="{{route('get/student/file/download', $file[0]->notifi_id )}}" class="btn btn-info">تنزيل</a>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </section>

@endsection