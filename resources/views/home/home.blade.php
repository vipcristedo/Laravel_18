@extends ('home.master')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 1px;
        }
        .task-table tbody tr td:nth-child(2){
            width: 120px;
        }
        .task-table tbody tr td:nth-child(3){
            width: 100px;
        }
    </style>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection

@section('title')
Trang chủ
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('todo.task.create') }}" class="btn btn-success">Thêm công việc mới</a>
            </div>
        </div>
        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Tên công việc</th>
                    <th>Trạng thái</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach ( $tasks as $task )
                    <tr>
                        <td class="table-text"><div><a href="{{ route('todo.task.show', $task->id ) }}">{{ $task->name }}</a></div></td>
                        <!-- Task Edit Button -->
                        <td>
                            <p>@if($task->status==0)
                                <b>Chưa làm</b>
                                @elseif($task->status==1)
                                <b>Đang làm</b>
                                @elseif($task->status==-1)
                                <b>Không làm</b>
                                @elseif($task->status==2)
                                <b>Đã hoàn thành</b>
                            @endif</p>
                        </td>
                        <!-- Task Edit Button -->
                        <td>
                            <a href="{{ route('todo.task.edit',$task->id) }}" class="btn btn-primary">Sửa</a>
                        </td>
                        <!-- Task Complete Button -->
                        @if($task->status==2)
                        <td>
                            <a href="{{ route('todo.task.reComplete', $task->id ) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-refresh" aria-hidden="true" style="width: 14px"></i>Làm lại
                            </a>
                        </td>
                        @else
                        <td>
                            <a href="{{ route('todo.task.complete', $task->id ) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
                        @endif
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('todo.task.delete', $task->id ) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
