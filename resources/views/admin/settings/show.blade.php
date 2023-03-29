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
                    <li class=" active">الاعدادات</li>
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
                        <div class="card-body vendor-table ">
                            <table class="display table-bordered" id="basic-1">
                                <tr>
                                    <th class="text-center" width="40%">العنوان</th>
                                    <th class="text-center">الموضوع</th>
                                </tr>
                                @foreach($settings as $setting)
                                <tr>
                                    <th class="text-center" width="40%"><a  href="{{url(route('admin/settings/edit', $setting->id))}}" > {{$setting->title}}</a></th>
                                    <td class="text-center"> {!! Str::limit($setting->subject, 300 , $end='.......')!!}</td>
                                </tr>
                                <div class="modal fade" id="myModaledit-{{ $setting->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">تعديل الاعدادات</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
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
                                                            <textarea class="form-control" id="froala-editor" value="" name="subject" type="text" required="">{{$setting->subject}}  </textarea>
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
                                    </div>
                                </div>
                                @endforeach
                            </table>

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

