@extends('layouts.front.home')

@section('content')
    <section class="login">
        <div class="container">
            <form action="{{route('user/reset-password/update')}}" method="post">
                @csrf
                @include('flash::message')
                <div class="form-group">
                    <label for="exampleInputEmail1">* الكود</label>
                    <input type="number" name="pin_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('pin_code')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail11">* البريد الالكترونى</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp">
                    @error('email')
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
                <button type="submit" class="btn btn-primary">ارسال</button>
            </form>
        </div>
    </section>
@endsection


@section('script')
@endsection
