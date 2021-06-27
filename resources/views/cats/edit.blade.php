@extends('layout')

@section('title')
Edit Catgeory {{$cat->name}}
@endsection

@section('main')
@include('errors')
    <h1>Edit Catgeory - {{$cat->name}}</h1>
    <form action = '{{url("/cats/update" , "$cat->id")}}' method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name = "name" value = "{{$cat->name}}"> <br><br>
        <label for="">Desc</label>
        <textarea name="desc" id="" cols="30" rows="10">{{$cat->desc}}</textarea> <br><br>
        <img src="{{asset('uploads/'.$cat->img)}}" class = "my-3" alt="">
<br><br>
        <input type="file" name="img" id="">
        <br><br>
        <input type="submit" value = "edit">
    </form>
@endsection