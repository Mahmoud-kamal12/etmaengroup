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
                        <h3>الكورسات</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">DashBorad</li>
                        <li class="breadcrumb-item active">
                            <a style="text-decoration:none;color:black;" href="{{url(route('admin/courses/index'))}}">
                                الكورسات
                            </a>
                        </li>
                        <li class="breadcrumb-item active">اضافه كورس</li>
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
                            <h5>اضافه كورس</h5> 
                        </div>
                        <div class="card-body">
                            <form class="card" action="{{url(route('admin/courses/store'))}}" method="POST" enctype="multipart/form-data">
                                @include('flash::message')
                                @csrf
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> الإسم</label>
                                        <input class="form-control" id="validationCustom01" name="CourseName" value="{{ old('CourseName') }}" type="text" required="">
                                        @error('CourseName')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label pt-0"><span>*</span> السعر</label>
                                        <input class="form-control" id="validationCustom02" name="price" value="{{ old('price') }}" type="text" required="">
                                        @error('price')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom03" class="col-form-label pt-0"><span>*</span> المدرب</label>
                                        <!-- <input class="form-control" id="validationCustom03" name="instructor" value="{{ old('instructor') }}" type="text" required=""> -->
                                        <select class="form-control" name="instructor" id="validationCustom03">
                                            <option value=""></option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('instructor')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom04" class="col-form-label pt-0"><span>*</span> نبذة عن المدرب</label>
                                        <textarea class="form-control" id="validationCustom04" name="instructor_preef">
                                            {{old('instructor_preef')}}
                                        </textarea>
                                        @error('instructor_preef')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom05" class="col-form-label pt-0"><span>*</span> مدة الدورة</label>
                                        <input class="form-control" id="validationCustom05" name="course_duration" value="{{ old('course_duration') }}" type="text" required="">
                                        @error('course_duration')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom06" class="col-form-label pt-0"><span>*</span> نبذة عن الدورة</label>
                                        <textarea class="form-control" id="validationCustom06" name="course_preef" required="">
                                            {{ old('course_preef') }}
                                        </textarea>
                                        @error('course_preef')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom07" class="col-form-label pt-0"><span>*</span> الصورة</label>
                                        <input class="form-control" id="validationCustom07" name="image" value="{{ old('image') }}" type="file" required="">
                                        @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom08" class="col-form-label pt-0"><span>*</span> القسم</label>
                                        <!-- <input class="form-control" id="validationCustom08" name="departement" value="{{ old('departement') }}" type="text" required=""> -->
                                        <select class="form-control" id="validationCustom08" name="departement">
                                            <option value=""></option>
                                            <option value="1">استشاري</option>
                                            <option value="2">لغات</option>
                                            <option value="3">كورسات</option>
                                        </select>
                                        @error('departement')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- <div class="form-group col-4" style="direction:ltr;display:flex;justify-content:center;align-items: flex-end;">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" name="is_going" value="1" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">الذهاب لاضافه المتدربين</label>
                                        </div>
                                    </div> -->
                                    <div class="form-group mt-4">
                                        <button class="btn btn-primary" type="submit">Add</button>
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