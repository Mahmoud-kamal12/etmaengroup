    
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalEdit-{{ $answer->id}}">
        <i class="fas fa-edit" style="color:white;"></i>
    </button>
    <div class="modal fade" id="myModalEdit-{{ $answer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">تعديل الاجابه</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form class="card" action="{{url(route('admin/answers/update', $answer->id))}}" method="post">
                        @csrf
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> الاجابه</label>
                                <input class="form-control" id="validationCustom01" name="answer" value="{{ $answer->answer }}" type="text" required="">
                                @error('answer')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-4" style="direction:ltr;display:flex;justify-content:center;align-items: flex-end;">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="is_correct" value="1" id="customSwitch1" {{ $answer->is_correct == 1 ? "checked" : "" }}>
                                    <label class="custom-control-label" for="customSwitch1">الاجابه الصحيحه</label>
                                </div>
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