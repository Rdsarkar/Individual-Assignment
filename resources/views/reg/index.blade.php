<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>User Registration</h2>
<form action="{{route('regi')}}" method="post" style="text-align: center; padding-top: 150px;">
    
    @csrf

    @foreach($errors->all() as $err)
    {{$err}} <br>
    @endforeach 
        Email: <br>
    <input type="text" name="bemail" value="{{old('bemail')}}"><br><br>
        User Name: <br>
        <input type="text" name="bname" value="{{old('bname')}}"><br><br>
        Password: <br>
        <input type="password" name="bpass" value="{{old('bpass')}}"><br><br>
        <h3>{{session('msg')}}</h3>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>