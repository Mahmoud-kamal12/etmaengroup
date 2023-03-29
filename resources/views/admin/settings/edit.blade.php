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
                        <h3>الاعدادات</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">لوحه التحكم</li>
                        <li class="breadcrumb-item active"><a href="{{url(route('admin/settings/index'))}}">الإعدادات</a></li>
                        <li class="active">{{$setting->title}}</li>
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
                        <h5>الاعدادات</h5>
                    </div>
                    <div class="card-body">
                        @isset($settings)
                            <div class="card-body">
                                @include('flash::message')
                                <div class="modal-body mt-3">
                                    <form class="card" action="{{url(route('admin/settings/update', $setting->id))}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="digital-add needs-validation">
                                            <div class="form-group">
                                                <label for="validationCustom01" class="col-form-label pt-0">العنوان</label>
                                                <input class="form-control" id="validationCustom01" value="{{$setting->title}}" name="title" type="text" required="">
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom01" class="col-form-label pt-0">الموضوع</label>
                                                <textarea class="form-control" id="summary-ckeditor" value="" name="subject" type="text" required="">{{$setting->subject}}  </textarea>
                                                @error('subject')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-4">
                                                <button class="btn btn-primary" type="submit">تعديل</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
        // $(function() { $('textarea').froalaEditor() });
        CKEDITOR.replace( 'summary-ckeditor',{
            contentsLangDirection: "rtl"});
    </script>
@endsection






