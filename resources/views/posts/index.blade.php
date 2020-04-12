<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <td><a href="{{route('cposts')}}">Post Create</a></td>
    <table border="1px">
        <tr>
            <td><a href="">All Post</a></td>
            <td>Actions</td>
            
        </tr>

        @foreach($all as $allt)
		<tr>

            <td>{{$allt['pname']}} | {{$allt['cname']}} | {{$allt['tname']}}</td>
            
        <td><a href="{{route('updatePosts',$allt['id'])}}">Update</a>
            {{-- |<form action="{{route('destroy', $allt['id'])}}"
            >
            <button type="submit">Delete</button>
        </form> --}}
    </td>
			
		</tr>
		@endforeach 

</body>
</html>