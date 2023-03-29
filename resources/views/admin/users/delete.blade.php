    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModaldelete-{{ $user->id}}">
        <i class="fas fa-trash-alt"></i>
    </button>
    <div class="modal fade" id="myModaldelete-{{ $user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">تاكيد التعديلات</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form role="form" action="{{url(route('admin/users/delete',$user->id))}}" class="" >
                        <input name="_method" type="hidden">
                        {{ csrf_field() }}
                        <p>هل انت متاكد من هذه التعديلات ؟</p>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">متاكد</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">الغاء</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>