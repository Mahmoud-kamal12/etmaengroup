@extends('layouts.admin.home')
<!-- title page -->
@section('title')
Multikart - Premium Admin Template
@endsection
<!-- content -->
@section('content')

<style>
    .dataTables_paginate,
    .dataTables_info,
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
        display: none;
    }

    .search_input {
        display: flex;
        align-items: center;
    }

    .search_input input {
        width: auto;
        margin-inline-start: 10px;
    }
</style>

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>المجموعات</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">
                        <a style="text-decoration:none;color:black;" href="{{url(route('admin/classes/index'))}}">
                            المجموعات
                        </a>
                    </li>
                    <li class="breadcrumb-item active">ارسال ملفات</li>
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
                    <h5>ارسال ملفات</h5>
                </div>
                @isset($classes)
                <div class="card-body">
                    <div class="text-center"><span style="padding:10px 10px; border-bottom: 2px solid #333; border-top: 2px solid #333">مجموعه : {{$classes->title}}</span></div><br>
                    @include('flash::message')
                    @csrf
                    <div class="card-body vendor-table">
                        <form class="card" action="{{url(route('admin/classes/file/store', $classes->id))}}" method="post" enctype="multipart/form-data">
                            @include('flash::message')
                            @csrf
                            <div class="digital-add needs-validation">
                                <div class="form-group">
                                    <label for="validationCustom02" class="col-form-label"> رفع ملف</label>
                                    <input name="file" type="file" class="form-control" id="inputGroupFile02">
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </div>
                        </form>
                        <br><br>
                        <table class="display table table-borderd table-hover" id="basic-1">
                            <thead>
                                <tr>
                                    <th>المسلسل</th>
                                    <th>الملف</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="userstRecords">
                                @foreach($files as $file)
                                    <tr id="tr_student_row_{{$file->id}}">
                                        <td>{{$file->id}}</td>
                                        <td>{{$file->file_name}}</td>
                                        <td>
                                            <button class="btn btn-info btn-xs" type="submit">
                                                <a href="{{route('admin/classes/file/download', $file->id)}}" style="text-decoration:none;color:white;">
                                                    تنزيل
                                                </a>
                                            </button>
                                            <button class="btn btn-primary btn-xs" type="submit">
                                                <a href="{{route('admin/classes/file/delete', $file->id)}}" style="text-decoration:none;color:white;">
                                                    حذف
                                                </a>
                                            </button>                                        
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endisset
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection
