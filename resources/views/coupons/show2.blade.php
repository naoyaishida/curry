@extends('layouts.app')


{{--
    <div>
      <h1>{{$coupon->name}}</h1>


    <img src="{{asset($coupon->image)}}" alt="{{$coupon->name}}" width="10%" height="10%">

    <h1>{{$coupon->coupon}}</h1>

    </div> --}}


@section('content')



{{-- <div class="card">
    <div class="card-header">
       {{$coupon->coupon}}
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <tbody>
                            <tr>

                                <td><img src="{{$coupon->image}}" alt="{{$coupon->name}}" width="100%" height="auto"></td>
                            </tr>
                            <tr>
                                <td>{!! $coupon->content !!}</td>
                            </tr>
                            <tr>
                                <td><a href="" class="btn btn-danger btn-sm">back</a></td>
                            </tr>
            </tbody>
        </table>
    </div>
</div> --}}

<div class="content">
    {{-- テキストセンターで真ん中配置 --}}
<div class="text-center" >
                <h1>クーポンを獲得しました</h1>
                <img src="{{asset($coupon->image)}}" alt="{{$coupon->name}}"  class="text-center" width="50%" height="50%" >
               <h3 class="pt-5">クーポン内容</h3>
                <strong><h1 class="pt-2 ">{{$coupon->coupon}}</h1></strong>
                <a href="{{route('coupons.index')}}"><button type="button" class="btn btn-warning btn-lg">トップへ戻る</button></a>
</div>
</div>


@endsection

