<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medical Store</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    {{--<link href="https://fastcdn.org/Animate.css/3.4.0/animate.min.css" rel="stylesheet">--}}

    <style>
        img{
            display: block;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-info">
    <!-- Brand/logo -->
    <span class="navbar-brand text-dark" href="#">FOMPS</span>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('/')}}">
                <button class="fa fa-home btn btn-success">Home</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('store')}}">
                <button class="fa fa-home btn btn-outline-dark">Add a Book To Store</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('shop')}}">
                <button class="fa fa-home btn btn-outline-dark">Buy Your Book</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/store/table">
                <button class="fa fa-home btn btn-success">Available Books In Store</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{url('purchasedbook')}}">
                <button class="fa fa-home btn btn-warning">Purchased Books</button>
            </a>
        </li>
    </ul>
</nav>
<img src="{{url('1.png')}}" width="500" height="350">
<div class="container">
    @yield('content')
</div>
<div class="bg-dark text-white p-3 mt-1 text-center">
    © {{date('Y')}} Copyright FOMPS
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".getprice").change(function () {
            if ($(this).is(":checked")) {
                var oldprice = parseFloat($("#total_price").text());
                oldprice += parseFloat($(this).data("price"));
                $("#total_price").text(oldprice);
            } else {
                var oldprice = parseFloat($("#total_price").text());
                oldprice -= parseFloat($(this).data("price"));
                $("#total_price").text(oldprice);
            }

        })
    });
</script>
</body>

</html>
