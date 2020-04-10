<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form action="{{route('alog')}}" method="POST"style="text-align: center; padding-top: 150px;">
        @csrf
        <h3>Admin Login</h3>
         Email<br>
        <input type="text" name="aname"><br>
         Password<br>
        <input type="password" name="apass"><br><br>
        

        <button type="submit">Submit</button>

        <br><br><br><br>

        <a href="{{route('adlogin')}}">Administrative User Login</a>
    </form>
</body>
</html>