<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .image img{
        height: 90%;
        width: 0%;
    }

    .upper{
        display: flex;
    }

    .upper-right{
        clear: both;
    }

    .upper img{
        height: 90%;
        width: 90%;

    }

    .upper-button{
        text-align: center;
    }
    </style>
</head>
<body>



@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="upper p-2">

            <div class="image" height="300px" width="300px">
                    <h1> {{$coupon->name}}</h1>
                <img src="{{asset($coupon->image)}}" alt="{{$coupon->title}}"  class="card-img-top" height="100%" width="100%">
            </div>

            <div class="upper-right pb-5 pl-5">
            <div class="upper-text ">
            <br>
            <h4>クーポン内容</h4>
            <strong><h1>{{$coupon->coupon}}</h1></strong>
            </div>
                <div id="map" style="width:400px; height:300px">

                <script type="text/javascript" charset="utf-8" src="http://js.api.olp.yahooapis.jp/OpenLocalPlatform/V1/jsapi?appid=dj00aiZpPUNsQWxWeWNXbTlYbSZzPWNvbnN1bWVyc2VjcmV0Jng9OTc-"></script>
                <script type="text/javascript">
                window.onload = function(){
                var ymap = new Y.Map("map");
                ymap.drawMap(new Y.LatLng(35.66572, 139.73100), 17);
                ymap.addControl(new Y.HomeControl());
                ymap.addControl(new Y.LayerSetControl());
                }
                </script>
                </div>


            <div class="upper-button pt-3">
                <a href="{{route('coupons.show2',['coupon'=>$coupon->id])}}"><button type="button" class="btn btn-warning btn-lg">クーポンを獲得</button></a>
            </div>

             </div>


        </div>

        {{--
<a href="{{route('edit_blog_path',['blog'=>$blog->id])}}" class="btn btn-outline-info">Edit</a> --}}


        <div class="info pb-4">
        <h2>お店情報</h2>
        {{$coupon->info}}
        </div>




        {{-- <a href="{{route('coupons.edit',['coupon'=>$coupon->id])}}"  class="btn btn-outline-info" >Edit</a> --}}
        {{-- スラッシュいれないと戻れない --}}
        <a href="{{route('coupons.index')}}" class="btn btn-outline-primary">Back</a>

    {{-- <form action="{{route('coupons.destroy',['coupon'=>$coupon->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form> --}}


@endsection

</body>
</html>
