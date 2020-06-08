<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<header>
    @include('elems.header')
</header>
<aside>
    @section('sidebar')
        <p>here is sidebar</p>
    @show
</aside>
<main>
    @yield('content')
</main>
<footer>
    @include('elems.footer')
</footer>
</body>
</html>
