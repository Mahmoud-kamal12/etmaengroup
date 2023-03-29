@extends('layouts.admin.home')

<!-- title page -->
@section('title')
    lessons
@endsection

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
                    <h3>الدروس</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">
                        <a style="text-decoration:none;color:black;" href="{{url(route('admin/products/index'))}}">
                            الدورات
                        </a>
                    </li>
                    <li class="breadcrumb-item active">الدروس</li>
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
                    <h5>الدروس</h5>
                </div>
                <div class="card-body">
                    <!-- start poper add admin -->

                    <div class="btn-popup pull-right">
                        <!-- create row -->
                            @include('admin.products.lessons.create')
                        <!-- end create row -->
                    </div>

                    <!-- end poper add admin -->
                    @isset($lessons)
                    <br>
                    <br>
                    @include('flash::message')
                    <div class="card-body vendor-table">
                        <table class="display table table-borderd table-hover" id="basic-1">

                            <thead>
                                <tr>
                                    <th>المسلسل</th>
                                    <th>العنوان</th>
                                    <th>الترتيب</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lessons as $lesson)
                                <tr>
                                    <td>{{$lesson->id}}</td>
                                    <td>{{$lesson->title}}</td>
                                    <td>{{$lesson->arrange}}</td>
                                    <td> 

                                        <!-- edit row -->
                                        @include('admin.products.lessons.edit')
                                        <!-- end edit row -->

                                        <!-- activate row -->
                                        @include('admin.products.lessons.activate')
                                        <!-- end activate row -->

                                        <!-- delete row -->
                                        @include('admin.products.lessons.delete')
                                        <!-- end delete row -->

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection