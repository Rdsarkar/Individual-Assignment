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
        Email: <br>
        <input type="email" name="bemail"><br><br>
        User Name: <br>
        <input type="text" name="bname"><br><br>
        Password: <br>
        <input type="password" name="bpass"><br><br>
        
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>