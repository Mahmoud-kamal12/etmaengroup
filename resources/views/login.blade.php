@extends('layouts.front.home')

@section('content')
    <section class="login">
        <div class="container">
            <form action="{{route('user/check-login')}}" method="post">
                @csrf
                @include('flash::message')
                <div class="form-group">
                    <label for="exampleInputEmail1">البريد الالكترونى</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">الرقم السرى</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">تسجيل دخول</button>
                <a href="{{route('user/reset-password')}}" class="btn btn-primary">نسيت الرقم السري</a>
            </form>
        </div>
    </section>
@endsection


@section('script')
@endsection
