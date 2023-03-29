    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalcreate">
        اضافه احابه
    </button>
    <div class="modal fade" id="myModalcreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">اضافه اجابه</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form class="card" action="{{url(route('admin/answers/store', $id))}}" method="post">
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> الاجابه</label>
                                <input class="form-control" id="validationCustom01" name="answer" value="{{ old('answer') }}" type="text" required="">
                                @error('answer')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-4" style="direction:ltr;display:flex;justify-content:center;align-items: flex-end;">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="is_correct" value="1" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">الاجابه الصحيحه</label>
                                </div>
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