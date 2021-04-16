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
            <!--{{ __('Dashboard') }}-->
        </h2>
    </x-slot>
    <div class="wrapper">
        <div class="items">
            @foreach($items as $item)
                <div class="item_box">
                    <p>{{$item->title}}</p>
                    <p>{{number_format($item->price)}}円(税込)</p>
                </div>
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
</html>
