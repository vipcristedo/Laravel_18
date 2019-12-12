
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
	@yield('css')
</head>
<body id="app-layout">

@include('home.header')
@yield('content')
@include('home.footer')

<!-- JavaScripts -->
	@yield('js')
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>