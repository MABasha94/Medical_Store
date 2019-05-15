@extends('master')
@section('content')
    <h2>Completed Purchases</h2>

    <table class="table table-dark">
        <tr>
            <th>Student Name</th>
            <th>Book Name</th>
            <th>Price</th>
            <th>Date</th>
        </tr>
        @foreach($data as $raw)
            <tr>
                <td>{{$raw->studentname}}</td>
                <td>{{$raw->bname}}</td>
                <td>{{$raw->purchase_price}}</td>
                <td>{{$raw->created_at}}</td>
            </tr>
        @endforeach
    </table>

@endsection
