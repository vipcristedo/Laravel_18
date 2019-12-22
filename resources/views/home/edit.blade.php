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
Sửa công việc
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Sửa công việc
            </div>
            
            <div class="panel-body">
                <!-- Display Validation Errors -->
            <a href="{{ route('todo.task.index') }}" class="btn btn-success">Trở lại</a>
            <!-- New Task Form -->
                <form action="{{ route('todo.task.update',$task->id) }}" method="POST" class="form-horizontal">

                {{ csrf_field() }}

                {{ method_field('PUT') }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" id="task-name" class="form-control" placeholder="Tên công việc" value="{{ $task->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Deadline</label>
                        <div class="col-sm-8">
                            <input type="dateTime-local" name="deadline" id="task-deadline" class="form-control" value="{{ $task->deadline }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-8">
                            <select  class="form-control" name="status">
                                @foreach ($status as $key => $value)
                                <option value="{{ $key }}"{{ $task->status==$key?'selected':'' }}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Content</label>
                        <div class="col-sm-8">
                            <input type="text" name="content" class="form-control" placeholder="Mô tả công việc" value="{{ $task->content }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Priority</label>
                        <div class="col-sm-8">
                            <select  class="form-control" name="priority">
                                @foreach ($priority as $key => $value)
                                <option value="{{ $key }}"{{ $task->priority==$key?'selected':'' }}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-check" aria-hidden="true"></i>Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
