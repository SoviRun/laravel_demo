<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Gene Laravel Demo')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="/" class="navbar-brand">Gene Laravel</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a href="/help" class="nav-link">帮助</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">登录</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>