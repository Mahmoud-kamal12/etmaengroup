@extends('layouts.admin.home')

<!-- title page -->
@section('title')
    Bookings
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
                    <h3>الحجوزات</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">الاختبارات</li>
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
                    <h5>الحجوزات</h5>
                </div>
                <div class="card-body">
                    <!-- start poper add admin -->

                    <div class="search_input">
                        <label for="search">بحث : </label>
                        <input type="text" class="form-control" id="data_search">
                    </div>

                    <!-- end poper add admin -->
                    @isset($bookings)
                    <br>
                    @include('flash::message')
                    <div class="card-body vendor-table">
                        <table class="display table table-borderd table-hovar" id="basic-1">
                            <thead>
                                <tr>
                                    <th>المسلسل</th>
                                    <th>المتدرب</th>
                                    <th>الدوره</th>
                                    <th>الدرجه</th>
                                    <th>تقيم الاختبار</th>
                                </tr>
                            </thead>
                            <tbody id="tableRecords">
                                @foreach($bookings as $booking)
                                <tr>
                                    <td>{{$booking->id}}</td>
                                    <td>
                                        <a href="{{ route('admin/bookings/student-info', $booking->id) }}" target="_blank" style="color: black;">
                                            {{optional($booking->user)->name}}
                                        </a>
                                    </td>
                                    <td>{{optional($booking->course)->title}}</td>
                                    <td>{{$booking->raw}}</td>
                                    <td>

                                        <!-- status row -->
                                        @include('admin.bookings.status')
                                        <!-- end status row -->

                                        <!-- completed row -->
                                        @include('admin.bookings.completed')
                                        <!-- end completed row -->

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin-top: 20px; font-weight: 600; font-size: 16px;">
                            Showing 1 to <span id="showItems"></span> of <span>{{App\Models\Booking::count()}}</span> entries
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
    let dataLen = @json($bookings);
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
                    url: "{{ route('admin/bookings/getMore') }}",
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
                                                    <td>${data[i].user_name}</td>
                                                    <td>${data[i].title}</td>
                                                    <td>

                                                        <!-- status -->
                                                            <button type="button" class="btn btn-info " data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalstatus-${data[i].id}">
                                                                ${ data[i].status == 1 ?' <i class="fas fa-lock-open"></i>' : '<i class="fas fa-lock"></i>' }
                                                            </button>
                                                            <div class="modal fade" id="myModalstatus-${data[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Confirmation</h5>
                                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form role="form" action="${data[i].urlRouteStatus}" class="">
                                                                                <input name="_method" type="hidden">
                                                                                {{ csrf_field() }}
                                                                                <p>Are You Sure To Update This Data ?</p>
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-primary" type="submit">Sure</button>
                                                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!-- end status -->

                                                        <!-- completed -->
                                                            <button type="button" class="${ !data[i].uuid_completed == "" ? 'btn btn-success' : 'btn btn-danger' }" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalCompleted-${data[i].id}">
                                                                <i style="color:white;"  class="fas fa-check-circle"></i>
                                                            </button>
                                                            <div class="modal fade" id="myModalCompleted-${data[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Confirmation</h5>
                                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form role="form" action="${data[i].urlRouteCompleted}" class="">
                                                                                <input name="_method" type="hidden">
                                                                                {{ csrf_field() }}
                                                                                <p>Are You Sure To Update This Data ?</p>
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-primary" type="submit">Sure</button>
                                                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!-- end completed -->

                                                    </td>
                                                </tr>
                                            `
                            }
                            document.getElementById("tableRecords").innerHTML += records
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
            url: "{{ route('admin/bookings/search') }}",
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
                                            <td>${data[i].user_name}</td>
                                            <td>${data[i].title}</td>
                                            <td>

                                                <!-- status -->
                                                    <button type="button" class="btn btn-info " data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalstatus-${data[i].id}">
                                                        ${ data[i].status == 1 ?' <i class="fas fa-lock-open"></i>' : '<i class="fas fa-lock"></i>' }
                                                    </button>
                                                    <div class="modal fade" id="myModalstatus-${data[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Confirmation</h5>
                                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form" action="${data[i].urlRouteStatus}" class="">
                                                                        <input name="_method" type="hidden">
                                                                        {{ csrf_field() }}
                                                                        <p>Are You Sure To Update This Data ?</p>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-primary" type="submit">Sure</button>
                                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- end status -->

                                                <!-- completed -->
                                                    <button type="button" class="${ !data[i].uuid_completed == "" ? 'btn btn-success' : 'btn btn-danger' }" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalCompleted-${data[i].id}">
                                                        <i style="color:white;"  class="fas fa-check-circle"></i>
                                                    </button>
                                                    <div class="modal fade" id="myModalCompleted-${data[i].id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Update Confirmation</h5>
                                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form" action="${data[i].urlRouteCompleted}" class="">
                                                                        <input name="_method" type="hidden">
                                                                        {{ csrf_field() }}
                                                                        <p>Are You Sure To Update This Data ?</p>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-primary" type="submit">Sure</button>
                                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- end completed -->

                                            </td>
                                        </tr>
                                    `
                    }
                    document.getElementById("tableRecords").style.display = null
                    document.getElementById("tableRecords").innerHTML = records
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
                    document.getElementById("tableRecords").style.display = 'none'
                    let btnNoData = `<button type="button" name="load_more_button" class="w-auto btn btn-primary form-control px-5" id="load_more_button_remove">No Data</button>`
                    document.getElementById("load_more").innerHTML = btnNoData
                }
            }
        })
    });
</script>
@endsection
