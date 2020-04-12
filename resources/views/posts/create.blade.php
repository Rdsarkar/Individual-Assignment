<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Create</title>
</head>
<body>
    <form action="{{route('sposts')}}" method="POST">
        @csrf
        
        @foreach($errors->all() as $err)
		{{$err}} <br>
        @endforeach 

        Post: <br>
        <input type="text" name="pname"><br><br>
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

        <input type="submit" value="Add"> 
    </form>
</body>
</html>