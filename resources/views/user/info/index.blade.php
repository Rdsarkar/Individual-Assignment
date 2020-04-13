<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center; padding-top: 150px;">
        <h3> For {{$userInfo->bname}} user</h3>  
    
    User Name: <br>{{$userInfo->bname}} <br><br>
    User Email: <br>{{$userInfo->bemail}} <br><br>
    User Password: <br>{{$userInfo->bpass}} <br><br>
    
    </div>
</body>
</html>