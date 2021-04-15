<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="/css/slider.css" rel="stylesheet">
    <link href="/css/slick/slick-theme.css" rel="stylesheet">
    <link href="/css/slick/slick.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('template.header')
    <ul class="slider pconly">
      <li><img src="/images/pc/top/01.jpg"></li>
      <li><img src="/images/pc/top/01.jpg"></li>
      <li><img src="/images/pc/top/01.jpg"></li>
      <li><img src="/images/pc/top/01.jpg"></li>
    </ul>
    <ul class="slider sponly">
      <li><img src="/images/sp/top/01_sp.png"></li>
      <li><img src="/images/sp/top/01_sp.png"></li>
      <li><img src="/images/sp/top/01_sp.png"></li>
      <li><img src="/images/sp/top/01_sp.png"></li>
    </ul>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script>
        $(document).ready(function(){
          $('.slider').slick({
          dots: true,
          autoplay: true,
          });
        });
    </script>
</body>
</html>