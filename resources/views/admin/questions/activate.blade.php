    
    
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalactivate-{{ $question->id}}">
        @if($question->is_activate == 1) <i class="fas fa-lock-open"></i> @else <i class="fas fa-lock"></i> @endif
    </button>
    <div class="modal fade" id="myModalactivate-{{ $question->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">تاكيد التعديلات</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form role="form" action="{{url(route('admin/questions/activate',$question->id))}}" class="" >
                        <input name="_method" type="hidden">
                        {{ csrf_field() }}
                        <p>هل انت متاكد من هذه التعديلات ؟</p>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">تاكيد</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">الغاء</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>