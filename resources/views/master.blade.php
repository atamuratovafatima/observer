<!doctype html>
<html lang="en">
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

@section('sidebar')
    This is the master sidebar
@show

<div class="container">
    @yield('content')
</div>




</body>
</html>