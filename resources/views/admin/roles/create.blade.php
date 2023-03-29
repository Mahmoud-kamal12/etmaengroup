@extends('layouts.admin.home')
<!-- title page -->
@section('title')
Multikart - Premium Admin Template
@endsection
<!-- content -->
@section('content')

<style>
    .form-check-input {
        position: inherit;
        margin-left: 0 !important
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
                    <li class="breadcrumb-item active">
                        <a style="text-decoration:none;color:black;" href="{{url(route('admin/roles/index'))}}">
                        الصلاحيات
                        </a>
                    </li>
                    <li class="breadcrumb-item active">اضافه صلاحيه</li>
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
                    <h5>اضافه صلاحيه</h5>
                </div>
                <div class="card-body">
                    <form class="card" action="{{url(route('admin/roles/store'))}}" method="post" enctype="multipart/form-data">
                        @include('flash::message')
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label class="form-label">الاسم</label>
                                <input class="form-control" name="name" type="text">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label mb-3">بنود الصلاحيه</label><br>
                                <div class="form-group col-sm-3">
                                    <input class="form-check-input" type="checkbox" name="all" id="basic_ss" onchange="onClickCheckboxAll();">
                                    <label class="form-check-label" for="basic_ss">
                                        تحديد الكل
                                    </label>
                                </div>
                                <div class="row">
                                    @isset($permissions)
                                        @foreach($permissions as $permission)
                                        <div class="form-group col-sm-3">
                                            <input class="form-check-input checkbox-on-change" type="checkbox" name="permission_id[]" value="{{$permission->id}}" id="basic_{{$permission->id}}">
                                            <label class="form-check-label" for="basic_{{$permission->id}}">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                    @endisset
                                    @error('permission_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
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
@section('script')
<script>
    function onClickCheckboxAll() {
        let checkBoxAll = document.getElementById("basic_ss").checked;
        document.querySelectorAll('.checkbox-on-change').forEach((checkboxInput) => {
            if (checkBoxAll) {
                checkboxInput.checked = true;
            } else {
                checkboxInput.checked = false;
            }
        })
    }
</script>
@endsection