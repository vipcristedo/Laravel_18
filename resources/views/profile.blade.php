<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
</head>
<body>
	<ul style="list-style: none; margin: 0; padding: 0;text-align: left;">
		<li><a>Họ và tên: </a><span>{{$name}}</span></li>
		<li><a>Năm sinh: </a><span>{{$year}}</span></li>
		<li><a>Trường: </a><span>{{$school}}</span></li>
		<li><a>Quê Quán: </a><span>{{$que}}</span></li>
		<li><a>Giới thiệu: </a><span>{!! $gioiThieu !!}</span></li>
		<li><a>Mục tiêu sau khóa học: </a><span>{{$target}}</span></li>
	</ul>
</body>
</html>