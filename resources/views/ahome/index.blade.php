<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Blog</h1>

    <hr>
    <h2>This is Blog Home for Admin</h2>
    <h3>{{session('aname')}}</h3>
<a href="{{route('alogout')}}">Logout</a>
</body>
</html>