@extends('layouts.common')
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="wrapper" id="item_register">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
{{ Form::open(['url' => '/item_register']) }}
<dl>
    <dt>商品名</dt>
    <dd><input type="text" name="title"></dd>
    <dt>価格(税込価格を入力してください)</dt>
    <dd><input type="number" name="price"></dd>
    <dt>当サイトクーポン適用対象</dt>
    <dd>{{ Form::select('is_coupon', ['1'=>'クーポン適用を認める', '2'=>'クーポン適用を認めない'], '1') }}</dd>
    
</dl>
{{ Form::submit('送信ボタン', ['class'=>'']) }}
{{ Form::close() }}
</div>
@endsection
