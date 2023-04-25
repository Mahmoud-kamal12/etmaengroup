<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body {
            display: grid;
            grid-template: auto auto auto / auto auto;
            justify-content: space-between;
            width: 90%;
            background-color: #F8F9FB;
            padding: 20px;
        }

        .logo>img {
            width: 120px;
            border-radius: 10%;
            border-style: outset;
        }
        .info{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .info > span{
            font-size: small;
            color: #4e4b4b;
        }
        .content{
            grid-area: 2 / 1 / span 2 / span 2;
            width: 70%;
            margin-top: 40px;
        }
        .content > h1{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .content > p{
            margin-top: 0px;
            margin-bottom: 5px;
            color: #5e5e5e;
        }
        .content > p > span {
            font-weight: 800;
            color: black;
        }
        .content > span{
            color: #5e5e5e;
            font-weight: 800;
        }
        .footer > p > span {
            font-weight: 800;
            color: black;
        }
        .footer > p{
            margin-top: 0px;
            margin-bottom: 5px;
            color: #5e5e5e;
        }
    </style>
</head>

<body style="display: flex;justify-content: center;align-items: center;height: 98vh;" dir="rtl">
<div class="body">
    <div class="logo">
        <img src="{{public_path("admin/logo.png")}}" alt="logo Etmaen Can't Load">
    </div>
    <div class="info" style="DIRECTION: ltr;">
        <span> loipsum dolor sit amet consectetur adipisicing elit.</span>
        <span> loipsum dolor sit amet consectetur adipisicing elit.</span>
    </div>
    <div class="content">
        <span>CERTIFICATE OF COMPLETION</span>
        <h1>{{$product->title}}</h1>
        <p>Instructors <span>{{$instructor->name}}</span></p>
    </div>
    <div class="footer">
        <h1>{{$student->name}}</h1>
        <p>Date <span>{{\Carbon\Carbon::now()->format("MMM Do YY")}}</span></p>
        <p>Length <span>{{$product->duration}}</span></p>
    </div>
</div>
</body>

</html>
