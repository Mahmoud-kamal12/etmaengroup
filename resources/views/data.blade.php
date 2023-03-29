@extends('layouts.front.home')

@section('content')
<section class="login">
    <div class="container">
        <form action="" method="post">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="form-group">
                        <label for="traineeName">الاسم رباعى</label>
                        <input type="text" name="traineeName" class="form-control" id="traineeName"
                            aria-describedby="name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="age">العمر</label>
                        <input type="number" name="age" class="form-control" id="age">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="traineePhone">رقم الجوال</label>
                        <input type="number" name="traineePhone" class="form-control" id="traineePhone">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="traineeID">رقم الهوية</label>
                        <input type="number" name="traineeID" class="form-control" id="traineeID">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="traineeEmail">البريد الالكترونى</label>
                        <input type="email" name="password" class="form-control" id="traineeEmail">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">تسجيل دخول</button>
        </form>
    </div>
</section>
@endsection


@section('script')
<script>
    $('footer').addClass('short_data')

</script>
@endsection
