@extends('master')
@section('content')
    <form action="/edit/book/{{$book->id}}" method="post">
        @csrf
        <div class="form-group">
            <label class="border border-success text-black" style="background: chartreuse">Book
                Title: {{$book->bname}}</label>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="number" name="bookprice" class="form-control" value="{{$book->bprice}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Update!</button>
        </div>
    </form>

@endsection
