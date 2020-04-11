<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{route('blogin')}}" method="POST" style="text-align: center; padding-top: 150px;">
                            
        <h2>Login Portal</h2> 
        @csrf
        Email: <br>
        <input type="email" name="bemail"><br>
        Password:<br>
        <input type="password" name="bpass"><br><br>
        <input type="submit" value="Login"><br>
        <h3>{{session('msg')}}</h3>
        <a href="{{route('reg')}}" style="float: right">Registration</a>
    </form>
</body>
</html>