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
        height: 60%;
        width: 60%;

    }
    </style>
</head>
<body>



@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="upper">


        {{-- インデックスページ以外はアセットを使ってコネクション    --}}
            {{-- <div class="image"> --}}
                <img src="{{asset($coupon->image)}}" alt="{{$coupon->title}}"  class="card-img-top">
            {{-- </div> --}}

            <div class="upper-right">
            <div class="upper-text">
            <h1>
                {{$coupon->name}}
                <br>
                {{$coupon->coupon}}
            </h1>
            </div>

            <div class="upper-button">
                <a href="{{route('coupons.show2',['coupon'=>$coupon->id])}}"><button type="button" class="btn btn-primary btn-lg">GET COUPON</button></a>
            </div>

             </div>


        </div>

        {{--
<a href="{{route('edit_blog_path',['blog'=>$blog->id])}}" class="btn btn-outline-info">Edit</a> --}}


        <div class="info">
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
