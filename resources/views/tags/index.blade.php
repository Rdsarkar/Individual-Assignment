<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AllTags</title>
</head>
<body>
        <a href="{{route('adash')}}">Back</a>
    <td><a href="{{route('ctags')}}">Tag Create</a></td>
    <table border="1px">
        <tr>
            <td><a href="">All Tags</a></td>
            <td>Actions</td>
            
        </tr>

        @foreach($all as $allt)
		<tr>

            <td>{{$allt['tname']}}</td>
            
        <td><a href="{{route('updateTags',$allt['id'])}}">Update</a>|<form action="{{route('destroy', $allt['id'])}}">
            <button type="submit">Delete</button>
        </form></td>
			
		</tr>
		@endforeach 

       
    </table>
</body>
</html>