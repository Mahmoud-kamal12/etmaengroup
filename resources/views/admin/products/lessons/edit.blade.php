    
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalEdit-{{ $lesson->id}}">
        <i class="fas fa-edit" style="color:white;"></i>
    </button>
    <div class="modal fade" id="myModalEdit-{{ $lesson->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">تعديل الاجابه</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form class="card" action="{{url(route('admin/lessons/update', $lesson->id))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> العنوان</label>
                                <input class="form-control" id="validationCustom01" name="title" value="{{ $lesson->title }}" type="text" required="">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom0125" class="col-form-label pt-0"><span>*</span> الترتيب</label>
                                <input class="form-control" id="validationCustom0125" name="arrange" value="{{ $lesson->arrange }}" type="text" required="">
                                @error('arrange')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom0125" class="col-form-label pt-0"><span></span> الرابط</label>
                                <input class="form-control" id="validationCustom0125" name="link" value="{{ $lesson->link }}" type="text">
                                @error('link')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom011" class="col-form-label pt-0"><span>*</span> الشرح</label>
                                <textarea class="form-control" id="validationCustom011" name="description" required>{{ $lesson->description }}</textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span> رفع فيديو</label>
                                <input name="video" type="file" class="form-control" id="validationCustom02">
                                @error('video')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn btn-primary" type="submit">تعديل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>