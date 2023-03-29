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
                    <h3>المشرفين</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">
                        <a style="text-decoration:none;color:black;" href="{{url(route('admins/index'))}}">
                            المشرفين    
                        </a>
                    </li>
                    <li class="breadcrumb-item active">تعديل صلاحيه مشرف</li>
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
                    <h5>تعديل صلاحيه مشرف</h5>
                </div>
                @isset($admin)
                <div class="card-body">
                    <form class="card" action="{{url(route('admins/role/update', $admin->id))}}" method="post" enctype="multipart/form-data">
                        @include('flash::message')
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label>الصلاحيه</label>
                                <select name="role_id" class="select2 form-control">
                                    <option value="">اختر</option>
                                    @if($roles && $roles -> count() > 0)
                                        @foreach($roles as $role)
                                        <option value="{{$role->id}}" {{ $admin->role_id === $role->id ? "selected" : "" }}>{{$role->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('role_id')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn btn-primary" type="submit">تعديل</button>
                            </div>
                        </div>
                    </form>
                </div>
                @endisset
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection