<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>上海戴索电子科技</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('layui/css/layui.css') }}?v=2.5.5">
    <link rel="stylesheet" type="text/css" href="{{asset('css/nav.css')}}?v=1.0.0.2" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dessaul.css') }}?v=1.0.0.0">
    <script type="text/javascript" charset="utf-8" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('layui/layui.js') }}?v=2.5.5"></script>

</head>
<body>
@include("layout.header")

@yield("content")

@include("layout.footer")

</body>
<script type="text/javascript" charset="utf-8" src="{{asset('js/swiper.min.js')}}?v=1.0.0.0"></script>
<script type="text/javascript" charset="utf-8" src="{{asset('js/swiper.animate.min.js')}}?v=1.0.0.0"></script>
<script type="text/javascript" charset="utf-8" src="{{asset('js/main.js')}}?v=1.0.0.2"></script>
</html>
