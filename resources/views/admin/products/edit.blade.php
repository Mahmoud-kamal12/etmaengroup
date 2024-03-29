@extends('layouts.admin.home')

<!-- title page -->
@section('title')
Multikart - Premium Admin Template
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>الدورات</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">لوحه التحكم</li>
                    <li class="breadcrumb-item active">
                        <a style="text-decoration:none;color:black;" href="{{url(route('admin/products/index'))}}">
                            الدورات
                        </a>
                    </li>
                    <li class="breadcrumb-item active">تعديل دوره</li>
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
                    <h5>تعديل دوره</h5>
                </div>
                <div class="col-lg-8">
                    <img src="{{asset($product->photo)}}" style="width: 250px;border-radius:15px" alt="">
                </div>
                @include('flash::message')
                <div class="card-body">
                    @isset($product)
                    <form class="card" action="{{url(route('admin/products/update', $product->id))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> السؤال</label>
                                <input class="form-control" id="validationCustom01" name="title" value="{{ $product->title }}" type="text" required="">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> مده الدوره</label>
                                <input class="form-control" id="validationCustom01" name="duration" value="{{ $product->duration }}" type="text" required="">
                                @error('duration')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> لينك التسجيل</label>
                                <input class="form-control" id="validationCustom01" name="link" value="{{ $product->link }}" type="text" required="">
                                @error('link')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label pt-0"><span>*</span> الشرح</label>
                                <textarea class="form-control" id="validationCustom02" name="description">
                                {{$product->description}}
                                </textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="type" value="1" type="hidden">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom04" class="col-form-label pt-0"><span>*</span> السعر</label>
                                <input class="form-control" id="validationCustom04" name="price" value="{{ $product->price }}" type="text" required="">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom033" class="col-form-label pt-0"><span>*</span> المدرب</label>
                                <select class="form-control" name="user_id" id="validationCustom033" autocomplete="off" required>
                                    <option value=""></option>
                                    @foreach($users as $user)
                                    <?php
                                    $selected = '';
                                    if ($user->id == $product->user_id) {
                                        $selected = 'selected';
                                    }
                                    ?>
                                    <option value="{{$user->id}}" <?php echo $selected ?>>{{$user->name}}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom06" class="col-form-label pt-0"><span>*</span> نبذه عن المدرب</label>
                                <textarea class="form-control" id="validationCustom06" name="user_desc">
                                {{$product->user_desc}}
                                </textarea>
                                @error('user_desc')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> الاساله </label>
                                <button class="btn btn-success mb-2" id="AddQuiz">+</button>
                                <div id="quiz">
                                    @if($product->quiz)
                                    @foreach($product->quiz as $i=>$quiz)
                                    <div id="question">
                                        <div class="form-group">
                                            <label class="col-form-label">السؤال رقم {{$i + 1}}</label>
                                            <input type="text" name="quiz[{{$i}}][question]" value="{{$quiz['question']}}" class="form-control">
                                        </div>
                                        <label for="AddAnswer" class="col-form-label d-inline"><span>*</span> الاجابات </label>
                                        <a class="btn btn-success mb-2" id="AddAnswer" onclick="AddAnswer(event)">+</a>
                                        @if($quiz['answer'])
                                        @foreach($quiz['answer'] as $A=>$answer)
                                        <div id="answers-{{$i}}">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="order0">ترتيب الاجابه</label>
                                                        <input type="text" name="quiz[{{$i}}][answer][{{$A}}][order]" id="order0" value="{{$answer['order']}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="text0">الاجابه</label>
                                                        <input type="text" name="quiz[{{$i}}][answer][{{$A}}][text]" value="{{$answer['text']}}" id="text0" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <div class="form-group">
                                            <label class="col-form-label" for="text0">ترتيب الاجابه الصحيحه</label>
                                            <input type="text" name="quiz[{{$i}}][right_answer_order]" id="text0" value="{{$quiz['right_answer_order']}}" class="form-control">
                                        </div>
                                        <hr>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"> رفع صوره</label>
                                <input name="photo" type="file" class="form-control" id="inputGroupFile02">
                                @error('photo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <button class="btn btn-primary" type="submit">تعديل</button>
                            </div>
                        </div>
                    </form>
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
    $(document).on("click", "#AddQuiz", function(e) {
        e.preventDefault();
        const numberIndex_question = $(e.target.nextElementSibling).children().length;
        $("#quiz").append(`
                                    <div id="question">
                                    <div class="form-group">
                                    <label class="col-form-label">السؤال رقم ${numberIndex_question + 1}</label>
                                    <input type="text" name="quiz[${numberIndex_question}][question]" class="form-control">
                                    </div>
                                    <label for="AddAnswer" class="col-form-label d-inline"><span>*</span> الاجابات </label>
                                    <a class="btn btn-success mb-2" id="AddAnswer" onclick="AddAnswer(event)">+</a>
                                    <div id="answers-${numberIndex_question}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label" for="order0">ترتيب الاجابه</label>
                                                <input type="text" name="quiz[${numberIndex_question}][answer][0][order]" id="order0" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-form-label" for="text0">الاجابه</label>
                                                <input type="text" name="quiz[${numberIndex_question}][answer][0][text]" id="text0" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                                    <label class="col-form-label" for="text0">ترتيب الاجابه الصحيحه</label>
                                                    <input type="text" name="quiz[${numberIndex_question}][right_answer_order]" id="text0" class="form-control">
                                                </div>
                                    <hr>
                                    </div>
                        `)
    })

    function AddAnswer(event) {
        const numberIndex_answer = $(event.target.nextElementSibling).children().length;
        const numberIndex_question = $(event.target.nextElementSibling).attr('id').split('-')[1];
        $(event.target.nextElementSibling).append(`
                                            <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label" for="order${numberIndex_answer}">ترتيب الاجابه</label>
                                                <input type="text" name="quiz[${numberIndex_question}][answer][${numberIndex_answer}][order]" id="order${numberIndex_answer}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-form-label" for="text${numberIndex_answer}">الاجابه</label>
                                                <input type="text" name="quiz[${numberIndex_question}][answer][${numberIndex_answer}][text]" id="text${numberIndex_answer}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                `)
    }
</script>
@endsection