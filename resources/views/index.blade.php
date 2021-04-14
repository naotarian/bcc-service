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
    <ul class="slider">
      <li><img src="/images/pc/top/deli.jpeg"></li>
      <li><img src="/images/pc/top/hell.jpeg"></li>
      <li><img src="/images/pc/top/deli.jpeg"></li>
      <li><img src="/images/pc/top/hell.jpeg"></li>
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