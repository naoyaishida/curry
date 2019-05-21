@extends('layouts.app')

@section('content')


<ul class="list-group list-group-flush">
    @foreach ($coupons as $coupon)
    <li class="list-group-item">{{$coupon->name}}/{{$coupon->coupon  }}</li>
    @endforeach

  </ul>

  @endsection
