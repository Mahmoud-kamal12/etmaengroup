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
                    <h3>الأخبار</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">الأخبار</li>
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
                    <h5>الأخبار</h5>
                </div>
                <div class="card-body">
                    <!-- start poper add admin -->

                    <div class="btn-popup pull-right">
                        <button class="btn btn-primary btn-xs mt-1" type="button">
                            <a href="{{route('admin/news/create')}}" style="text-decoration:none;color:white;">
                                اضافه
                            </a>
                        </button>
                    </div>
                    <div class="search_input">
                        <label for="search">بحث : </label>
                        <input type="text" class="form-control" id="data_search">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </div>

                    <!-- end poper add admin -->
                    @isset($AllNews)
                    <br>
                    @include('flash::message')
                    <div class="card-body vendor-table">
                        <table class="display table table-borded table-hover" id="basic-1">
                            <thead>
                                <tr>
                                    <th>المسلسل</th>
                                    <th>العنوان</th>
                                    <th>التفاصيل</th>
                                    <th>الصوره</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody id="newsRecords">
                                @foreach($AllNews as $OneRow)
                                <tr>
                                    <td>{{$OneRow->id}}</td>
                                    <td>{{$OneRow->title}}</td>
                                    <td>{{$OneRow->description}}</td>
                                    <td>
                                        <div class="ml-2 d-flex">
                                            <img src="{{asset($OneRow->photo)}}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded">
                                        </div>
                                    </td>
                                    <td> 

                                        <!-- edit row -->
                                            <button class="btn btn-warning btn-xs" type="button">
                                                <a href="{{route('admin/news/edit', $OneRow->id)}}" style="text-decoration:none;color:white;">
                                                    <i class="fas fa-edit" style="color:white;"></i>
                                                </a>
                                            </button>
                                        <!-- end edit row -->

                                        <!-- delete row -->
                                        @include('admin.news.delete')
                                        <!-- end delete row -->

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin-top: 20px; font-weight: 600; font-size: 16px;">
                            Showing 1 to <span id="showItems"></span> of <span>{{App\Models\News::count()}}</span> entries
                        </div>
                        <div class="ltn__pagination-area text-center mt-5">
                            <div class="ltn__pagination">
                                <div id="load_more">
                                    <button type="button" name="load_more_button" class="w-auto btn btn-info form-control px-5" data-id="'.$last_id.'" id="load_more_button">عرض المزيد</button>
                                </div>
                            </div>
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

@section('script')
<script>
    let dataLen = @json($AllNews);
    let showItems = document.getElementById("showItems")
    showItems.innerHTML = dataLen.data.length
    let length = dataLen.data.length

    $(document).ready(function() {
        $(document).on('click', '#load_more_button', function() {
            let records = ``
            var _token = $('input[name="_token"]').val();
            var id = $(this).attr('data-id');
            let lastId = ''
            $('#load_more_button').html('<b>Loading... </b>');
            load_data(id, _token);

            function load_data(id = "", _token) {
                $.ajax({
                    url: "{{ route('admin/news/getMore') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: _token,
                    },
                    success: function(data) {
                        if (data.length > 0) {
                            for (let i = 0; i < data.length; i++) {
                                lastId = data[i].id
                                records +=
                                            `
                                                <tr>
                                                    <td>${data[i].id}</td>
                                                    <td>${data[i].title}</td>
                                                    <td>${data[i].description}</td>
                                                    <td>
                                                        <div class="ml-2 d-flex">
                                                            <img src="${data[i].photo}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded">
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <!-- edit row -->
                                                            <button class="btn btn-warning btn-xs" type="button">
                                                                <a href="${data[i].urlRouteEdit}" style="text-decoration:none;color:white;">
                                                                    <i class="fas fa-edit" style="color:white;"></i>
                                                                </a>
                                                            </button>
                                                        <!-- end edit row -->

                                                        <!-- delete row -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModaldelete-${data[i].id}">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                            <div class="modal fade" id="myModaldelete-${data[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Confirmation</h5>
                                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form role="form" action="${data[i].urlRouteDelete}" class="" >
                                                                                <input name="_method" type="hidden">
                                                                                {{ csrf_field() }}
                                                                                <p>Are You Sure To Delete This Data ?</p>
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-primary" type="submit">Sure</button>
                                                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!-- end delete row -->

                                                    </td>
                                                </tr>
                                            `
                            }
                            document.getElementById("newsRecords").innerHTML += records
                            length += data.length
                            showItems.innerHTML = Number(length)
                            let btnData = `<button type="button" name="load_more_button" class="w-auto btn btn-info form-control px-5" data-id=${length} id="load_more_button">عرض المزيد</button>`
                            $('#load_more_button').remove();
                            document.getElementById("load_more").innerHTML = btnData
                        } else if (data.length === 0) {
                            let btnNoData = `<button type="button" name="load_more_button" class="w-auto btn btn-primary form-control px-5" id="load_more_button_remove">No Data</button>`
                            $('#load_more_button').remove();
                            document.getElementById("load_more").innerHTML = btnNoData
                        }
                    }
                })
            }
        });
    });

    $(document).on('keyup', '#data_search', function() {
        var query = $(this).val();
        var _token = $('input[name="_token"]').val();
        let records = ``
        event.preventDefault();
        $.ajax({
            url: "{{ route('admin/news/search') }}",
            method: "POST",
            data: {
                query: query,
                _token: _token
            },
            success: function(data) {
                if (data.length > 0) {
                    for (let i = 0; i < data.length; i++) {
                        if (data[i].searchButton == 1) {
                            printSearchButton = 1;
                        } else {
                            printSearchButton = 0;
                        }
                        records +=
                                    `
                                        <tr>
                                            <td>${data[i].id}</td>
                                            <td>${data[i].title}</td>
                                            <td>${data[i].description}</td>
                                            <td>
                                                <div class="ml-2 d-flex">
                                                    <img src="${data[i].photo}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded">
                                                </div>
                                            </td>
                                            <td>

                                                <!-- edit row -->
                                                    <button class="btn btn-warning btn-xs" type="button">
                                                        <a href="${data[i].urlRouteEdit}" style="text-decoration:none;color:white;">
                                                            <i class="fas fa-edit" style="color:white;"></i>
                                                        </a>
                                                    </button>
                                                <!-- end edit row -->

                                                <!-- delete row -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModaldelete-${data[i].id}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                    <div class="modal fade" id="myModaldelete-${data[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Confirmation</h5>
                                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form" action="${data[i].urlRouteDelete}" class="" >
                                                                        <input name="_method" type="hidden">
                                                                        {{ csrf_field() }}
                                                                        <p>Are You Sure To Delete This Data ?</p>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-primary" type="submit">Sure</button>
                                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- end delete row -->

                                            </td>
                                        </tr>
                                    `
                    }
                    document.getElementById("newsRecords").style.display = null
                    document.getElementById("newsRecords").innerHTML = records
                    $('#load_more_button').remove();
                    $('#load_more_button_remove').remove();
                    length = data.length
                    showItems.innerHTML = Number(length)
                    if (printSearchButton == 1) {
                        let btnData = `<button type="button" name="load_more_button" class="w-auto btn btn-info form-control px-5" data-id=${length} id="load_more_button">عرض المزيد</button>`
                        document.getElementById("load_more").innerHTML = btnData
                    }
                } else if (data.length === 0) {
                    length = data.length
                    showItems.innerHTML = Number(length)
                    document.getElementById("newsRecords").style.display = 'none'
                    let btnNoData = `<button type="button" name="load_more_button" class="w-auto btn btn-primary form-control px-5" id="load_more_button_remove">No Data</button>`
                    document.getElementById("load_more").innerHTML = btnNoData
                }
            }
        })
    });
</script>
@endsection