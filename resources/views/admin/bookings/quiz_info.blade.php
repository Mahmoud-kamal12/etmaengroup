@extends('layouts.admin.home')
<!-- title page -->
@section('title')
    Multikart - Premium Admin Template
@endsection
<!-- content -->
@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>الاختبارات</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">DashBorad</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>تقيم الاختبار </h5>
                    </div>
                    <div class="card-body">
                        <form class="card" action="{{route("admin/bookings/quiz_rate" , $booking->id)}}" method="POST" enctype="multipart/form-data">
                            @include('flash::message')
                            @csrf
                            <div class="digital-add needs-validation">
                                @foreach($booking->quiz as $quiz)
{{--                                    @dd($quiz["q"])--}}
                                    <div class="form-group">
                                        <label for="validationCustom01"
                                               style="color: white;font-size: 25px;margin: 10px;}"
                                               class="col-form-label pt-0">{{$quiz["q"]}}</label>
                                        <textarea>{!! $quiz["a"] !!}</textarea>

                                    </div>

                                @endforeach

                                <div class="form-group mt-4">
                                    <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> درجة الاختبار كامله</label>
                                    <input class="form-control"  name="max" value="{{$booking->max}}" type="number" required="">
                                </div>

                                <div class="form-group mt-4">
                                    <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>  تقيم الطالب </label>
                                    <input class="form-control"  name="raw" value="{{$booking->raw}}" type="number" required="">
                                </div>

                                <div class="form-group mt-4">
                                    <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> الحاله </label>
                                    <select name="success_status">
                                        <option selected disabled>اختر حالة الطالب</option>
                                        <option value="1" @if($booking->success_status) selected @endif>ناجح</option>
                                        <option value="0"  @if(!$booking->success_status) selected @endif>راسب</option>
                                    </select>
                                </div>

                                <div class="form-group mt-4">
                                    <button class="btn btn-primary" type="submit">تقيم</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection


@section('script')
    <script src="https://cdn.tiny.cloud/1/aro73nhoq59jj6ob73y66n77k30cgt4onn7g7bmel7m6vtt5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            auto_focus: 'element1'

        });
    </script>
@endsection
