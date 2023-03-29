@extends('layouts.admin.home')

<!-- title page -->
@section('title')
    Bookings
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
                    <h3>بيانات الطالب</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">الاشتراكات</li>
                    <li class="breadcrumb-item active">بيانات الطالب</li>
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
                    <h5>بيانات الطالب</h5>
                </div>
                <div class="card-body">
                    
                    @isset($user)
                    <br>
                    @include('flash::message')
                        <div class="card-body vendor-table">
                            <table  class="display table table-bordered" id="basic-1">

                                <tr>
                                    <th class="text-center" width="40%">ID</th>
                                    <td>{{$user->id}}</td>
                                </tr>
                                <tr>
                                    <th class="text-center" width="40%">الاسم</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th class="text-center" width="40%">الايميل</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th class="text-center" width="40%">رقم الهويه</th>
                                    <td>{{$user->id_number}}</td>
                                </tr>
                                <tr>
                                    <th class="text-center" width="40%">رقم الجوال</th>
                                    <td>{{$user->phone}}</td>
                                </tr>
                                <tr>
                                    <th class="text-center" width="40%">الجنس</th>
                                    <?php (int)$user->gender == 1 ? $gender = "ذكر" : $gender = "انثي" ?>
                                    <td>{{$gender}}</td>
                                </tr>
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

@section('script')

@endsection