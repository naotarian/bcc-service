<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>bccサービス(仮)</title>
        <!-- cssをインポート -->
        <link href="{{ asset('/css/base.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
       
    </head>
    <body>
        @include('template.header2')
        
        @yield('content')
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>