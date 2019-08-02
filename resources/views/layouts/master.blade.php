<html>
<head>
    <title>@yield('title')</title>
</head>
<link rel="stylesheet" href="{{asset("css/app.css")}}">

<body>
    @include('layouts.section.menu')
    @yield('main-content')
</body>
</html>
