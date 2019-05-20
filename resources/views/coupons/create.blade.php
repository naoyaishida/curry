@extends('layouts.app')

@section('content')

<form action="{{route('coupons.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

<div class="form-group">
        <label for="name">お店の名前</label>
        <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
    <label for="area">場所</label>
    <input type="text" name="area" class="form-control">
</div>

<div class="form-group">
    <label for="coupon">クーポン内容</label>
    <input type="text" name="coupon" class="form-control">
</div>

<div class="form-group">
    <label for="time">営業時間</label>
    <input type="text" name="time" class="form-control">
</div>

 <div class="form-group">
    <label for="info">お店の情報</label>
<textarea name="info" rows="10" class="form-control"></textarea>
</div>

<div class="form-group">
    <label for="good">当店のオススメ</label>
<textarea name="good" rows="10" class="form-control"></textarea>
</div>

<div class="form-group">
    <input type="file" name="image" class="form-control">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary">送信</button>
</div>

</form>

@endsection

