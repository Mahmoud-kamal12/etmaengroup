@extends('layouts.front.home')

@section('content')

    <section class="faq 0" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h2>اختبار اتمام دورة "  {{$product->title}}"</h2>
                        <span class="section-title-bg">FAQ</span>
                    </div>
                </div>
            </div>
            <div class="faq-content">
                <form action="{{route('course/mycourses/quiz/answer' , $product->id)}}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                @foreach($product->quiz as $i => $quiz)
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title"><a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne{{$quiz}}" aria-expanded="false" aria-controls="collapseOne{{$quiz}}" class="collapsed"> {{$quiz}} </a></h4>
                                            <input type="hidden" name="quiz[{{$i}}][q]" value="{{$quiz}}">
                                        </div>
                                        <div id="collapseOne{{$quiz}}" class="panel-collapse collapse show-div" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <textarea name="quiz[{{$i}}][a]" >Enter Your Answer Here!</textarea>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <div class="row">
                            <div class="col col-12 align-content-center text-center">
                                <button class="btn btn-primary "  type="submit">ارسال</button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/aro73nhoq59jj6ob73y66n77k30cgt4onn7g7bmel7m6vtt5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            auto_focus: 'element1'

        });
    </script>
@endsection
