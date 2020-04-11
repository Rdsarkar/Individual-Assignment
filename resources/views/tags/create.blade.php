<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AllCategories</title>
</head>
<body>
<form action="{{route('stags')}}" method="POST" style="text-align: center; padding-top: 150px;">
        <h3> Create Tags:</h3>
        @csrf
        <input type="text" name="tname">
        <input type="submit" value="Insert">
    </form>


</body>
</html>