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
<div class="upper">
    {{$name}}
</div>
</div>


@endsection

