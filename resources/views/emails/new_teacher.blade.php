<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background: #eee;font-family: Arial, Helvetica, sans-serif;">
    <div style="width: 600px;margin: 50px auto;background: #fff;border:2px solid #d2d2d2; padding: 20px">
        <h3>Dear {{ $info['name'] }}</h3>
        <p>We have been creating an account with this data</p>
        <p><b>Email</b> {{ $info['email'] }}</p>
        <p><b>Password</b> {{ $info['password'] }}</p>
        <a href="{{ url('teacher/login') }}">Teacher Portal</a>
        <p>Thank you for choosing our service!</p>
    </div>
</body>

</html>
