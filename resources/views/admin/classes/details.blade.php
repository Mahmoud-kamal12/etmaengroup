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
                    <li class="breadcrumb-item active">معلومات المجموعه</li>
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
                    <h5>معلومات المجموعه</h5>
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
                                @foreach($students as $student)
                                <tr id="tr_student_row_{{$student->id}}">
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>
                                        <!-- add row -->
                                        <button class="btn btn-primary btn-xs remove_student_in_class" tr-id="tr_student_row_{{$student->id}}" student-id="{{$student->id}}" class-id="{{$classes->id}}" type="button">
                                            حذف
                                        </button>
                                        <!-- end add row -->
                                    </td>
                                </tr>
                                @endforeach
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
        $(document).on('click', '.remove_student_in_class', function() {
            let element = $(this).parent().parent();
            var tr_id = $(this).attr('tr-id');
            var student_id = $(this).attr('student-id');
            var class_id = $(this).attr('class-id');
            add_students(tr_id, student_id, class_id, _token);

            function add_students(tr_id, student_id, class_id, _token) {
                $.ajax({
                    url: "{{ route('admin/classes/students/remove') }}",
                    method: "POST",
                    data: {
                        student_id: student_id,
                        class_id: class_id,
                        _token: _token,
                    },
                    success: function(data) {
                        const messageWrapper = document.getElementById("message_div");
                        messageWrapper.innerHTML = '';
                        if (data.success) {
                            element.remove()
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
</script>
@endsection