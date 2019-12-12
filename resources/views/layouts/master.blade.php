<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
	<div>
    @include('layouts.header')
</div>
<div>
    @yield('content')
</div>
<div>
    @include('layouts.footer')
</div>
</body>
</html>