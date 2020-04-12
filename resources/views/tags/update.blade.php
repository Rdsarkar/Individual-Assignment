<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>AllCategories</title>
</head>
<body>
    <a href="{{route('tags')}}">Back</a>
<form action="{{route('updatingtag',['id' => $updatetag->id])}}" method="POST" style="text-align: center; padding-top: 150px;">
        <h3> Create Tags:</h3>
        @csrf

        @foreach($errors->all() as $err)
		{{$err}} <br>
        @endforeach 
        
        <input type="text" name="tname" value="{{$updatetag->tname}}"><br>
        <input type="submit" value="Update">
    </form>
    
   
</body>
</html>

