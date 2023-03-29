@extends('layouts.front.home')

@section('content')
    <!-- <div class="search-modal text-center modal fade" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="header-search-form">
                        <form>
                            <input placeholder="Search" /> <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section class="EnglishTest">
        <div class="container">
            <div class="m-5">
                @include('flash::message')
            </div>
            <h2 class="testHeader">English test</h2>
            <p>Choose the best answer to fill each blank. </p>
            <div class="testContainer">
                <form action="{{url(route('test-level-save'))}}" class="testQuestions">
                    <div class="row" style="direction:ltr">
                        <label for="name" class="col-3">Name </label>
                        <input type="text" class="form-control col-3" placeholder="Enter your name" name="name">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <label for="name" class="col-3">Email</label>
                        <input type="email" class="form-control col-3" placeholder="Enter your email" name="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <ol class="row row-cols-2">
                        @isset($questions)
                            @foreach($questions as $question)
                                <li class="col-6 questionContainer">
                                    <ol>
                                        <div class="question">{{$question->title}} </div>
                                        @foreach($question->answers as $answer)
                                            <li class="custom-control custom-radio">
                                                <input type="hidden" name="questions[{{$question->id}}][question_id]" value="{{$question->id}}">
                                                <input class="custom-control-input" type="radio" name="questions[{{$question->id}}][answer_id]" id="ans1_{{$answer->id}}" value="{{$answer->id}}">
                                                <label class="custom-control-label" for="ans1_{{$answer->id}}">{{$answer->answer}} </label>
                                            </li>
                                        @endforeach
                                    </ol>
                                </li>
                            @endforeach
                        @endisset
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary" value="Submit answers">
                        </div>
                        <div class="col-6 results">
                            <img src="./assets/img/test_page/results.png" alt="results levels">
                        </div>
                    </ol>
                </form>
            </div>
        </div>
    </section>
    <section class="results">
    </section>
@endsection