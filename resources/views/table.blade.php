@extends('master')
@section('content')
    <h2>Available Books</h2>

    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Controls</th>
        </tr>
        @foreach($stores as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->bname}}</td>
                <td>{{$v->bquantity}}</td>
                <td>{{$v->bprice}}</td>
                <td><a href="{{url('editprice', $v->id)}}">
                        <button class="fa fa-home btn btn-outline-info">Edit Price</button>
                    </a></td>
            </tr>
        @endforeach
    </table>

@endsection
