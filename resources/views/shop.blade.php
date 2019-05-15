@extends('master')
@section('content')
    <h2>Buy From Our Store</h2>

    <form action="shop/save" method="post">
        @csrf
        <div class="form-group">
            <label for="Student Name">Student Name</label>
            <input type="text" name="stname" class="form-control">
        </div>
        @foreach($books as $v)
            <div class="form-check">
                <input name="booksBuy[]" class="form-check-input getprice" type="checkbox" value="{{$v->id}}"
                       id="check_{{$v->id}}" data-price="{{$v->bprice}}">
                <label class="form-check-label" for="check_{{$v->id}}">
                    {{$v->bname}}
                </label>
            </div>
        @endforeach
        <div class="form-group">
            <label class="border border-success text-black" style="background: chartreuse">Total Price: <span id="total_price">0</span> EGP</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Purchase!</button>
        </div>
    </form>
@endsection
