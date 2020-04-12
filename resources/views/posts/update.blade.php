<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>AllCategories</title>
</head>
<body>
    <a href="{{route('posts')}}">Back</a>
<form action="{{route('updatingpos',['id' => $updatepost->id])}}" method="POST" style="text-align: center; padding-top: 150px;">
        <h3> Create Categories:</h3>
        @csrf

        @foreach($errors->all() as $err)
		{{$err}} <br>
        @endforeach 

        
        <input type="text" name="pname" value="{{$updatepost->pname}}"><br>
        Select Categorie: <br>
        <select name="cname">
            @foreach($all as $allc)
            <option>{{$allc['cname']}}</option>
            @endforeach 
          </select><br><br>

          Select Tag: <br>
        <Select name="tname">
            @foreach($allt as $alltc)
            <option>{{$alltc['tname']}}</option>
            @endforeach 
        </Select><br><br>

        <input type="submit" value="Update">
    </form>
    
   
</body>
</html>

