@extends('layout')

@section('title')
all Categories
@endsection

@section('main')
<h1>all Category</h1>
    <a href="{{url('/cats/create')}}">Add Category</a>
    @foreach($cats as $cat)
        <h3>
            <a href="{{url('/cats/show' , $cat->id)}}">{{$cat->id}} - {{$cat->name}}</a>
        </h3>
        <button class = "my-btn">welcome {{$cat->id}}</button>
        <a href='{{url("/cats/edit" , "$cat->id")}}'>Edit</a>
        <a href='{{url("/cats/delete","$cat->id")}}'>Delete</a>
        <br>
        <img src="{{asset('uploads/'.$cat->img)}}" class = "my-3" alt="">
        <p>{{$cat->desc}}</p>
        <h6>{{$a}}</h6>
        <hr>
    @endforeach

    {{$cats->links()}}
@endsection

@section('pages_script')
<script>
    let btn = document.querySelectorAll(".my-btn");
    for(let i = 0; i < btn.length; i++) {
        this.onclick = function (e) {
            console.log(e.target.innerHTML)
        }
    }
</script>
@endsection