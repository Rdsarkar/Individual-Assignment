<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>AllCategories</title>
</head>
<body>
    <a href="{{route('categories')}}">Back</a>
<form action="{{route('updating',['id' => $updatecat->id])}}" method="POST" style="text-align: center; padding-top: 150px;">
        <h3> Create Categories:</h3>
        @csrf
        <input type="text" name="cname" value="{{$updatecat->cname}}"><br>
        <input type="submit" value="Update">
    </form>
    
   
</body>
</html>

