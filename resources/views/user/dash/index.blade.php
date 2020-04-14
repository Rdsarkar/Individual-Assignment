<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Blog</h1>

    <hr>
    <h2>This is Blog Home for User</h2>

    <hr>

    <table border="1px">
        <tr>
            <td><a href="{{route('categories')}}">All Catagories</a></td>
            <td><a href="{{route('tags')}}">All Tags</a></td>
            <td><a href="{{route('posts')}}">All Posts</a></td>
        </tr>


    </table>
    @foreach($all as $allu)
        <a href="{{route('userinfo',$allu['id'])}}">PersonalInfo</a>
    @break
    @endforeach

    <a href="{{route('blogout')}}">Logout</a>
</body>

</html>
