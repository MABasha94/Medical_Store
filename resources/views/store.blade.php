@extends('master')
@section('content')
<h2>Add a Book</h2>

<form action="{{url('store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="Book Name">Book Name</label>
        <input type="text" name="bookname" class="form-control">
    </div>
    <div class="form-group">
        <label for="Book Quantity">Quantity</label>
        <input type="number" name="bookquantity" min="1" max="300" class="form-control">
    </div>
    <div class="form-group">
        <label for="Price">Price</label>
        <input type="number" name="bookprice" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">Add To Store!</button>
    </div>
</form>
@endsection
