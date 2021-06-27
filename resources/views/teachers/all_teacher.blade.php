<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
</head>
<body>
    @foreach($teachers as $teacher)
        <h1>{{$teacher->id}} : {{$teacher->name}}</h1>
        
        <hr>
    @endforeach
</body>
</html>