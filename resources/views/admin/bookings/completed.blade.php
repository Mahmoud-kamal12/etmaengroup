    
    
    <?php if(!empty($booking->uuid_completed)){ $input_com = 'btn btn-success'; }else{ $input_com = 'btn btn-danger'; } ?>
    <button type="button" class="{{$input_com}}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#myModalCompleted-{{ $booking->id}}">
        <i style="color:white;"  class="fas fa-check-circle"></i>
    </button>
    <div class="modal fade" id="myModalCompleted-{{ $booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">تاكيد التعديلات</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form role="form" action="{{url(route('admin/bookings/completed',$booking->id))}}" class="" >
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