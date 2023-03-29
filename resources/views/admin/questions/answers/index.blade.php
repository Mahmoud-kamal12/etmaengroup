@extends('layouts.admin.home')

<!-- title page -->
@section('title')
    Answers
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
                    <h3>الاجابات</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">
                        <a style="text-decoration:none;color:black;" href="{{url(route('admin/questions/index'))}}">
                            الاسئله
                        </a>
                    </li>
                    <li class="breadcrumb-item active">الاجابات</li>
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
                    <h5>الاجابات</h5>
                </div>
                <div class="card-body">
                    <!-- start poper add admin -->

                    <div class="btn-popup pull-right">
                        <!-- create row -->
                            @include('admin.questions.answers.create')
                        <!-- end create row -->
                    </div>

                    <!-- end poper add admin -->
                    @isset($answers)
                    <br>
                    <br>
                    @include('flash::message')
                    <div class="card-body vendor-table">
                        <table class="display table table-borderd table-hover" id="basic-1">

                            <thead>
                                <tr>
                                    <th>المسلسل</th>
                                    <th>الاجابه</th>
                                    <th>الصحيحه</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($answers as $answer)
                                <tr>
                                    <td>{{$answer->id}}</td>
                                    <td>{{$answer->answer}}</td>
                                    <td>
                                        @if((int)$answer->is_correct == 1)
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        @endif
                                    </td>
                                    <td> 

                                        <!-- edit row -->
                                        @include('admin.questions.answers.edit')
                                        <!-- end edit row -->

                                        <!-- activate row -->
                                        @include('admin.questions.answers.activate')
                                        <!-- end activate row -->

                                        <!-- delete row -->
                                        @include('admin.questions.answers.delete')
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