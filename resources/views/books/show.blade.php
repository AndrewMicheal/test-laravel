<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Book</title>
</head>
<body>
    <h1>Show Books</h1>
    <h2>{{$book->name}}</h2>
    <small>created at : {{$book->created_at}}</small>
    <a href="{{url('/books')}}">back</a>
</body>
</html>