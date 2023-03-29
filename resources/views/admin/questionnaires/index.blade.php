@extends('layouts.admin.home')

<!-- title page -->
@section('title')
    News
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
                    <h3>الاستبيان والملف التعريفي</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">الاستبيان والملف التعريفي</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row OneRow-adding">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>الاستبيان والملف التعريفي</h5>
                </div>
                <div class="card-body">
                    
                    @isset($questionnaires)
                    <br>
                    @include('flash::message')
                    <div class="card-body vendor-table">
                        <table class="display table table-borded table-hover" id="basic-1">
                            <thead>
                                <tr>
                                    <th>المسلسل</th>
                                    <th>العنوان</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="newsRecords">
                                @foreach($questionnaires as $questionnaire)
                                <tr>
                                    <td>{{$questionnaire->id}}</td>
                                    <td>{{$questionnaire->key}}</td>
                                    <td> 

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalUpdate-{{ $questionnaire->id}}">
                                            <i class="fas fa-edit" style="color:white;"></i>
                                        </button>
                                        <div class="modal fade" id="myModalUpdate-{{$questionnaire->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">تعديل</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form" action="{{url(route('admin/questionnaires/update'))}}" method="POST" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <input name="row_id" value="{{ $questionnaire->id }}" type="hidden" >
                                                            @if($questionnaire->id == 1 || $questionnaire->id == 2)
                                                                <div class="form-group">
                                                                    <label for="validationCustom011" class="col-form-label pt-0"><span>*</span> الرابط</label>
                                                                    <input class="form-control" id="validationCustom011" name="link" value="{{ $questionnaire->value }}" type="text" required="">
                                                                    @error('link')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            @elseif($questionnaire->id == 3)
                                                                <div class="form-group">
                                                                    <label for="validationCustom02" class="col-form-label"><span>*</span> رفع الملف</label>
                                                                    <input name="photo" type="file" class="form-control" id="inputGroupFile02" required="">
                                                                    @error('photo')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            @endif
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="submit">حفظ</button>
                                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">الغاء</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin-top: 20px; font-weight: 600; font-size: 16px;">
                            Showing 1 to <span id="showItems">3</span> of <span>3</span> entries
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
