<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <h1>Show Category</h1>
    <h2>{{$cat->name}}</h2>
    <small>created at : {{$cat->created_at}}</small>
    <a href="{{url('/cats')}}">back</a>
</body>
</html>