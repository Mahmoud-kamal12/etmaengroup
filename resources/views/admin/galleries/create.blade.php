@extends('layouts.admin.home')

<!-- title page -->
@section('title')
Multikart - Premium Admin Template
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>الملفات</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">
                        <a style="text-decoration:none;color:black;" href="{{url(route('admin/galleries/index'))}}">
                            الملفات
                        </a>
                    </li>
                    <li class="breadcrumb-item active">اضافه ملف</li>
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
                    <h5>اضافه ملف</h5>
                </div>
                @include('flash::message')
                <div class="card-body">
                    <form class="card" action="{{url(route('admin/galleries/store'))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> العنوان</label>
                                <input class="form-control" id="validationCustom01" name="title" value="{{ old('title') }}" type="text" required="">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="col-form-label pt-0"><span>*</span> القسم</label>
                                <select class="form-control" id="validationCustom03" name="section" required>
                                    <option value=""></option>
                                    <option value="1">الافتتاح</option>
                                    <option value="2">الفيديوهات</option>
                                </select>                                
                                @error('section')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> رفع ملف</label>
                                <input name="file" type="file" class="form-control" id="inputGroupFile02" required>
                                @error('file')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn btn-primary" type="submit">اضافه</button>
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