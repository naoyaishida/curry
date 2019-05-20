@extends('layouts.app')

@section('content')

<form action="{{route('coupons.update',['coupon'=>$coupon->id])}}" method="post">

    @csrf
    @method('PUT')


<div class="form-group">
        <label for="title">store name</label>
<input type="text" name="name" class="form-control" value="{{$coupon->name}}" >
</div>

<div class="form-group">
    <label for="title">coupon</label>
    <input type="text" name="coupon" class="form-control" value="{{$coupon->coupon}}">
</div>

 <div class="form-group">
    <label for="info">store info</label>
<textarea name="info" rows="10" class="form-control">{{$coupon->info}}</textarea>
</div>

<div class="form-group">
    <label for="title">area</label>
    <input type="text" name="area" class="form-control" value="{{$coupon->area}}">
</div>

<div class="form-group">
    <input type="file" name="image" class="form-control">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary"> Add blog post</button>
</div>

</form>

<a href="{{route('coupons.index')}}"class="form-group">
    <button type="submit" class="btn btn-outline-primary">Back</button>
</a>

@endsection
