@extends('layouts.front.home')

@section('content')
    <section class="login">
        <div class="container">
            <form action="{{route('user/check-sign-in')}}" method="post">
                @csrf
                @include('flash::message')
                <div class="form-group">
                    <label>الاسم رباعى *</label><!--pattern="^[A-Za-z ]{5,}"-->
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required autocomplete="off" placeholder="برجاء كتابة الاسم رباعى">
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>رقم الهويه *</label><!--pattern="[0-9a-zA-z]{5,}"-->
                    <input type="text" id="id" name="id_number" value="{{ old('id_number') }}" class="form-control" required autocomplete="off" placeholder="برجاء كتابة رقم الهوية السعودىه">
                    @error('id_number')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>البريد الالكترونى *</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control" required autocomplete="off" placeholder="برجاء كتابة البريد الالكترونى">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>رقم الجوال *</label><!--pattern="[0-9]{5,}"-->
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" required autocomplete="off" placeholder="برجاء كتابة رقم الجوال">
                    @error('phone')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>الجنس *</label>
                    <select class="form-control" name="gender">
                        <option selected disabled>اختار الجنس</option>
                        <option value="1">ذكر</option>
                        <option value="2">انثى</option>
                    </select>
                    @error('gender')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>كلمه المرور *</label>
                    <input type="password" id="password" name="password" class="form-control" required minlength="8">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>تاكيد كلمه المرور *</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required minlength="8">
                    @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">تسجيل</button>
            </form>
        </div>
    </section>
@endsection


@section('script')
<script>
    $('#login__anchor').css('display' , 'none');
    $('footer').addClass('short_data')
</script>
@endsection
