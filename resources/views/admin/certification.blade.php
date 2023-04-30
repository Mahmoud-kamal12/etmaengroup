<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 , h4{
            margin: 5px;
        }
        h5{
            margin: 0px;
        }
        h3{
            font-size: 22px;
        }
        h4{
            font-size: 20px;
        }
        @media print {
            /* .pageBreakAvoid{
              page-break-inside: avoid;
            } */
            @page{
                size:A4;
                margin: 10px;
                /*size:auto;*/
            }
        }
    </style>
</head>
<body>
<div style="margin-bottom: 40px;height: 510px;background-image: url('{{public_path("admin/certificationsimages/Untitled.png")}}');background-size: contain;background-repeat: no-repeat;background-position: center;">
    <div style="display: flex;justify-content: center;align-items: center;flex-direction: column;height: 100%;">
        <h3>شــــــــهادة حضور برنامج تدريبي </h3>
        <h4>يشهد مركز اطمئن للارشاد الاسري بان الطفل  </h4>
        <h4 style="color: #638C48;"> {{$student->name}} </h4>
        <h4>  سعودي الجنسية بموجب الهوية  <span style="color: #638C48;"> {{$student->id_number}} </span>  قد حضر </h4>
        <h4>البرنامج التدريبي <span style="color: #C45911;"> {{$product->title}} </span></h4>
        <h4>بعدد (<span style="color: #C45911;">{{$product->duration}}</span>)  لمدة (<span style="color: #C45911;">2</span>) يوم في تاريخ {{\Carbon\Carbon::parse($booking->marked_at)->translatedFormat('Y/m/d')}} </h4>
    </div>
    <div style="position: absolute;top: 380px;height: 130px;width: 720px;right: 0px;left: 0px;margin: auto;">
        <div style="width: 100%;height: 100%;display: flex;justify-items: center;">
            <div style="width: 50%;display: flex;align-items: center;flex-direction: column;">
                <h5>المدير العام</h5>
                <h5>د. ريما البراهيمي</h5>
            </div>
            <div style="width: 50%;display: flex;align-items: center;flex-direction: column;">
                <h5>الختم</h5>
                <img src="{{public_path("admin/certificationsimages/image-removebg-preview.png")}}" style="height: 90px;margin-top: -20px;">
            </div>
        </div>
    </div>
</div>
<div style="height: 510px;">

</div>
</body>
</html>
