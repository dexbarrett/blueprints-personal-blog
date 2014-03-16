<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('page_title')</title>
    @yield('styles')
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    @yield('content')
</body>
</html>