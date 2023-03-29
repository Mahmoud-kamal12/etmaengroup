@extends('layouts.front.home')

@section('content')
    <section class="login">
        <div class="container">
            <form action="{{route('user/send-sode')}}" method="post">
                @csrf
                @include('flash::message')
                <div class="form-group">
                    <label for="exampleInputEmail1">البريد الالكترونى</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
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
