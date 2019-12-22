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
Xem chi tiết
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết công việc
            </div>

            <div class="panel-body">
                <a href="{{ route('todo.task.index') }}" class="btn btn-success">Trở lại</a>
                <table class="table table-striped task-table">
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-8">
                            <p>{{ $task->name }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Content</label>
                        <div class="col-sm-8">
                            <p>{{ $task->content }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Deadline</label>
                        <div class="col-sm-8">
                            <p>{{ $task->deadline }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-8">
                            <p>@if($task->status==0)
                                {{ 'Chưa làm' }}
                                @elseif($task->status==1)
                                {{ 'Đã hoàn thành' }}
                                @elseif($task->status==-1)
                                {{ 'Không làm' }}
                            @endif</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Priority</label>
                        <div class="col-sm-8">
                            <p>@if($task->priority==0)
                                {{ 'Bình thường' }}
                                @elseif($task->priority==1)
                                {{ 'Quan trọng' }}
                                @elseif($task->priority==2)
                                {{ 'Khẩn cấp' }}
                            @endif</p>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
