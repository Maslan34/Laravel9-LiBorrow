<html>
<head>
    <title>App Name - @yield('title')</title>
    @yield('head')
</head>
<h1>HEADER</h1>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>

@yield('foot')
<h1>FOOTER</h1>
</body>
</html>
