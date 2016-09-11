<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        baseUrl= "{{url('')}}";
    </script>
</head>
<body>
        @if( Auth::check())
<nav class="navbar navbar-default bg-faded ">
    <a class="navbar-brand" href="{{route('userlist')}}">Connect :- -:</a>
    <ul  class="nav navbar-nav ">
        <li class="nav-item ">
            <a class="nav-link" href="{{route('userlist')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('createUser')}}">Add Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disaled" >Login as:{{ Auth::user()->first_name }}</a>
        </li>
        <li class="nav-item">
            <a class="glyphicon glyphicon-log-out" href="{{route('logout')}}" >Logout</a>
        </li>
    </ul>



</nav>
        @endif
        <br>
<div class="container">

    @yield('content')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/search.js') }}"></script>

</body>
</html>