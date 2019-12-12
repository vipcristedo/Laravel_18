<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
</head>
<body>
	@foreach($lists as $list)
		<h4>Tên công việc: {{ $list['name'] }}</h4>
		<p>Status: {{ $list['status'] }}</p>
	@endforeach
</body>
</html>