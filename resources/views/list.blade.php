<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
</head>
<body>
	@foreach($lists as $list)
		<h4>Tên công việc: {{ $list['name'] }}</h4>
		<p>Status: @if($list['status']==0)
			{{ 'Chưa làm' }}
			@elseif($list['status']==1)
			{{ 'Đã hoàn thành' }}
			@elseif($list['status']==-1)
			{{ 'Không làm' }}
			@endif
		</p>
	@endforeach
</body>
</html>