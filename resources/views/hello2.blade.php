<!-- resources/views/hello2.blade.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head>
<body>
	<p>Tên tôi là: {{ $user['name'] }}</p>
	<p>Sinh năm: {{ $user['year'] }}</p>
	<p>Chất hóa học: {!! $content !!}</p>
	@foreach ($records as $records)
	{{$records}}<br>
	@endforeach
</body>
</html>