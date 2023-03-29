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
                    <h3>الصلاحيات</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">الصلاحيات</li>
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
                    <h5>الصلاحيات</h5>
                </div>
                <div class="card-body">
                    <!-- start poper add admin -->
                    <div class="btn-popup pull-right">
                        <button class="btn btn-primary btn-xs mt-1" type="button">
                            <a href="{{route('admin/roles/create')}}" style="text-decoration:none;color:white;">
                                اضافه
                            </a>
                        </button>
                    </div>
                    <!-- end poper add admin -->
                    @isset($roles)
                    <br>
                    @include('flash::message')
                    <div class="card-body vendor-table">
                        <table class="display table table-borderd table-hover" id="basic-1">
                            <thead>
                                <tr>
                                    <th>المسلسل</th>
                                    <th>الاسم</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        <!-- edit row -->
                                        <button class="btn btn-warning btn-xs mt-1" type="button">
                                            <a href="{{route('admin/roles/edit', $role->id)}}" style="text-decoration:none;color:white;">
                                                <i class="fas fa-edit" style="color:white;"></i>
                                            </a>
                                        </button>
                                        <!-- end edit row -->
                                        <!-- delete row -->
                                        @include('admin.roles.delete')
                                        <!-- end delete row -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin-top: 20px; font-weight: 600; font-size: 16px;">
                            Showing 1 to <span id="showItems">{{App\Models\Role::count()}}</span> of <span>{{App\Models\Role::count()}}</span> entries
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