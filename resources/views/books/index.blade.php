@extends('layout')

@section('title')
all Books
@endsection

@section('main')
<h1>all Books</h1>
    <a href="{{url('/books/create')}}">Add Books</a>

    @foreach($books as $bookItem)
       {{dd($bookItem)}};
    @endforeach

    {{$bookItem->links()}}
    
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