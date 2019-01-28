<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册确认链接</title>
</head>
<body>
    <h1>感谢在Gene的网站进行注册！但是没啥用！！</h1>

    <p>
        请点击下面的链接完成注册：
        <a href="{{ route('confirm_email',$user->activation_token) }}">
            {{ route('confirm_email',$user->activation_token) }}
        </a>
    </p>

    <p>
        如果不是您本人！请无视该邮件！！
    </p>
</body>
</html>