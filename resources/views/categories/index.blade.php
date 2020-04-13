<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AllCategories</title>
</head>
<body>
  
    <td><a href="{{route('ccategories')}}">Create</a></td>
    <table border="1px">
        <tr>
            <td><a href="">All Catagories</a></td>
            <td>Actions</td>
        
        </tr>

        @foreach($all as $allc)
		<tr>

            <td>{{$allc['cname']}}</td>
            
        <td><a href="{{route('updateCategories',$allc['id'])}}">Update</a>|<form action="{{route('des', $allc['id'])}}">
            <button type="submit">Delete</button>
        </form></td>
			
		</tr>
		@endforeach 

       
    </table>
</body>
</html>