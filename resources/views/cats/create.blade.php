@extends('layout')

@section('title')
Insert Catgeory
@endsection

@section('main')
@include('errors')
    <form action="{{url('/cats/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name = "name"> <br><br>
        <label for="">Desc</label>
        <textarea name="desc" id="" cols="30" rows="10"></textarea> <br><br>
        <input type="file" name="img" id="">
        <br><br>
        <input type="submit">
    </form>
@endsection