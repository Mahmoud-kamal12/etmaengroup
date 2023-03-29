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
                    <li class="breadcrumb-item active">اضافه المتدربين</li>
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
                    <h5>اضافه المتدربين</h5>
                </div>
                <div class="search_input">
                    <label for="search">بحث : </label>
                    <input type="text" class="form-control" id="data_search">
                </div>
                <div id="message_div" aria-live="polite" aria-atomic="true" style="position: fixed; inset: 20px; min-height: 200px; width: max-content; z-index: 999">

                </div>
                @isset($classes)
                    <div class="card-body">
                        <div class="text-center"><span style="padding:10px 10px; border-bottom: 2px solid #333; border-top: 2px solid #333">مجموعه : {{$classes->title}}</span></div>
                        @include('flash::message')
                        @csrf
                        <div class="card-body vendor-table">
                            <table class="display table table-borderd table-hover" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>المسلسل</th>
                                        <th>الايميل</th>
                                        <th>الاسم</th>
                                        <th>الرقم</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody id="userstRecords">

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

@section('script')
<script>
    var _token = $('input[name="_token"]').val();
    $(document).ready(function() {
        $(document).on('click', '.add_student_in_class', function() {
            var class_id = $(this).attr('class-id');
            var student_id = $(this).attr('student-id');
            add_students(class_id, student_id, _token);

            function add_students(class_id, student_id, _token) {
                $.ajax({
                    url: "{{ route('admin/classes/students/store') }}",
                    method: "POST",
                    data: {
                        class_id: class_id,
                        student_id: student_id,
                        _token: _token,
                    },
                    success: function(data) {
                        const messageWrapper = document.getElementById("message_div");
                        messageWrapper.innerHTML = '';
                        if (data.success) {
                            messageWrapper.innerHTML = `
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header" style="background-color: #1faa00;">
                                        <strong class="mr-auto">Success</strong>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body">
                                        ${data.success}
                                    </div>
                                </div>
                            `;
                        } else if (data.error) {
                            messageWrapper.innerHTML = `
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header" style="background-color: #9b0000;">
                                        <strong class="mr-auto">Failed</strong>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body">
                                        ${data.error}
                                    </div>
                                </div>
                            `;
                        }
                        setTimeout(() => {
                            messageWrapper.innerHTML = '';
                        }, 3000);
                    }
                })
            }
        });
    });

    $(document).on('keyup', '#data_search', function() {
        var query = $(this).val();
        let records = ``
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin/classes/students/search') }}",
            method: "POST",
            data: {
                query: query,
                _token: _token
            },
            success: function(data) {
                console.log(data[0].length);
                if (data[0].length > 0) {
                    for (let i = 0; i < data[0].length; i++) {
                        records +=
                            `
                                        <tr>
                                            <td>${data[0][i].id}</td>
                                            <td>${data[0][i].email}</td>
                                            <td>${data[0][i].name}</td>
                                            <td>${data[0][i].phone}</td>
                                            <td>

                                                <!-- add row -->
                                                    <button class="btn btn-warning btn-xs add_student_in_class" class-id="<?php echo $classes->id ?>" student-id="${data[0][i].id}" type="button">
                                                        اضافه
                                                    </button>
                                                <!-- end add row -->

                                            </td>
                                        </tr>
                                    `
                    }
                    document.getElementById("userstRecords").style.display = null
                    document.getElementById("userstRecords").innerHTML = records
                    $('#load_more_button_remove').remove();
                } else if (data.length === 0) {
                    document.getElementById("userstRecords").style.display = 'none'
                    let btnNoData = `<button type="button" name="load_more_button" class="w-auto btn btn-primary form-control px-5" id="load_more_button_remove">No Data</button>`
                    document.getElementById("load_more").innerHTML = btnNoData
                }
            }
        })
    });
</script>
@endsection