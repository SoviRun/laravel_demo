<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Gene Laravel Demo')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
{{--头部--}}
@include('layouts._header')

<div class="container">
    <div class="offset-md-1 col-md-10">
        {{--错误消息提醒--}}
        @include('shared._message')
        {{--内容--}}
        @yield('content')
        {{--脚部--}}
        @include('layouts._footer')
    </div>
</div>
{{--引入bootstrap的js--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>