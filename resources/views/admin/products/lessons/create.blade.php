
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalcreate">
        اضافه درس
    </button>
    <div class="modal fade" id="myModalcreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">اضافه درس</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form class="card" action="{{url(route('admin/lessons/store', $id))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom012" class="col-form-label pt-0"><span>*</span> العنوان</label>
                                <input class="form-control" id="validationCustom012" name="title" value="{{ old('title') }}" type="text" required="">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom0125" class="col-form-label pt-0"><span>*</span> الترتيب</label>
                                <input class="form-control" id="validationCustom0125" name="arrange" value="{{ old('arrange') }}" type="text" required="">
                                @error('arrange')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom0125" class="col-form-label pt-0"><span></span> الرابط</label>
                                <input class="form-control" id="validationCustom0125" name="link" value="{{ old('link') }}" type="text">
                                @error('link')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom0121" class="col-form-label pt-0"><span>*</span> الشرح</label>
                                <textarea class="form-control" id="validationCustom0121" name="description" required>{{ old('description') }}</textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom022" class="col-form-label"><span>*</span> رفع فيديو</label>
                                <input name="video" type="file" class="form-control" id="validationCustom022" accept="video/mp4,video/x-m4v,video/*">
                                @error('video')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn btn-primary" type="submit">اضافه</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
