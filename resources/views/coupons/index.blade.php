@extends('layouts.app')

@section('content')

<div class="row text-center">
<div class="col-md-3">
{{-- <h1>{{$user->name}}さんクーポンを使って今日を素敵な１日に！</h1> --}}
</div class="img-fluid">
{{-- <div class="wrapper" width="100%" height="400px"> --}}
<img src="{{'img/main6.jpg'}}" class="img-fluid w-100 p-3" alt="Responsive image" >
{{--
style="  width: 100%;
  height: 600px;
  /* width: 50%;/100px/
  padding-top: 50%;/100px/ */" --}}
{{-- </div> --}}

<div class="col-md-12">
<img src="https://img.grouponcdn.com/message-service/3k4xdE1aF9XdjtYcKL4gPkos5FKZ/3k-1056x100" alt="" class="text-center">
</div>
@foreach ($coupons as $coupon)

<div class="col-md-4 ">

    <div class="card ">

        <div class="card-header">
            <a href="{{route('coupons.show',['coupon'=>$coupon->id])}}">{{$coupon->title }}</a>
        </div>

        <div class="card-body">
        <a href="{{route('coupons.show',['coupon'=>$coupon->id])}}">
                <img src="{{$coupon->image}}" alt="{{$coupon->name}}"  class="card-img-top" width="auto" height="auto"></a>

        <p class="lead">

            店名：<strong>{{$coupon->name}}</strong>
            <br>
            住所：<strong>{{$coupon->area}}</strong>

            <img width="300" height="200" src="https://map.yahooapis.jp/map/V1/static?appid=【APPID】&lat=35.681093831866455&lon=139.76716278230535&z=12&width=300&height=200&pointer=on">
        </p>

    <a href="{{route('coupons.show',['coupon'=>$coupon->id])}}" class="btn btn-outline-primary">View Post</a>

        </div>


    </div>


</div>

@endforeach


</div>
@endsection
