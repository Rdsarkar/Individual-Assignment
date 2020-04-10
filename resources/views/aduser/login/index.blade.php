<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('adlog')}}" method="POST"style="text-align: center; padding-top: 150px;">
        @csrf
        <h3>Administrative User</h3>
        Administrative Username<br>
        <input type="text" name="adname"><br>
         Password<br>
        <input type="password" name="adpass"><br><br>
        


        <button type="submit">Submit</button>

        <br><br><br><br>

        <a href="{{route('alogin')}}">Admin Login</a>
    </form>
</body>
</html>