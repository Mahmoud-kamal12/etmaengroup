<style>
    .next-prev {
        height: 35px;
        display: inline-block;
        border: 3px solid green;
        font-family: "Roboto", sans-serif;
        font-size: 15px;
        font-weight: 200;
        text-align: center;
        text-decoration: none;
        color: #fff;
        overflow: hidden;
        border-radius: 15px;
    }

    .next-prev .icon {
        margin-right: 6px;
    }

    .next-prev .face-primary,
    .next-prev .face-secondary {
        display: block;
        padding: 0 32px;
        line-height: 31px;
        transition: margin 0.4s;
        direction: ltr;
        background-color: darkgreen;
        color: #fff;
        border: 1px solid darkgreen;
    }

    .next-prev .face-primary {
        background-color: green;
        color: #fff;
    }

    .next-prev:hover .face-primary {
        margin-top: -35px;
        background-color: darkgreen;
        color: #fff;
    }
</style>
@csrf
<div class="my-4 text-center">
    <a class="next-prev" style="margin-left: 150px;" href="{{url('lesson/next', $lesson->id)}}">
        <div class="face-primary">
             التالي 
            <span class="icon fa fa-arrow-right"></span>
        </div>
        <div class="face-secondary">
            <span class="icon fa fa-arrow-right"></span>
        </div>
    </a>
    <a class="next-prev" href="{{url('lesson/prev', $lesson->id)}}">
        <div class="face-primary">
            <span class="icon fa fa-arrow-left"></span>
            السابق
        </div>
        <div class="face-secondary">
            <span class="icon fa fa-arrow-left"></span>
        </div>
    </a>
</div>
<script>
    function data_nextCheck(){
        event.preventDefault();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{ route('lesson/checkmore') }}",
            method: "GET",
            data: {
                id: <?php echo $lesson->id; ?>,
                type: 'ASC',
                _token:_token
            },
            success: function(data) {
                console.log(data)
                // length = data.length
                // showItems.innerHTML = Number(length)
                // document.getElementById("data_next").style.display = 'none'
                // let btnNoData = `<button type="button" name="load_more_button" class="w-auto btn btn-primary form-control px-5" id="load_more_button_remove">No Data</button>`
                // document.getElementById("load_more").innerHTML = btnNoData
            }
        });
    }
</script>