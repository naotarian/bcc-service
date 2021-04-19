<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mypage.css') }}" rel="stylesheet">
   
    <title>Document</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href="/item_register">商品登録</a>
        <a href="/logout" method="post">logout</a>
    </x-slot>
    <div class="wrapper">
            
        <div class="item_banner"><b>出品中の商品</b></div>
        <div class="items">
            @foreach($items as $item)
            @if($item->is_stop == 0)
                <div class="item_box">
                    <p>{{$item->title}}</p>
                    <p>{{number_format($item->price)}}円(税込)</p>
                    <div class="btn">
                        <a href="/item_edit/{{$item->id}}">編集する</a>
                    </div>
                </div>
            @endif
            @endforeach
        </div>
        <div class="item_banner"><b>出品停止中の商品</b></div>
        <div class="items">
            @foreach($items as $item)
                @if($item->is_stop == 1)
                    <div class="item_box">
                        <p>{{$item->title}}</p>
                        <p>{{number_format($item->price)}}円(税込)</p>
                        <div class="btn">
                            <a href="/item_edit/{{$item->id}}">編集する</a>
                        </div>
                    </div>
                @endif
            @endforeach
     </div>
    </div>
    

    <!--<div class="py-12">-->
    <!--    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">-->
    <!--        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">-->
    <!--            <x-jet-welcome />-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

</html>
