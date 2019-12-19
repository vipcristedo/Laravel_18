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
                Thêm công việc mới
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->

            <!-- New Task Form -->
                <form action="{{ route('todo.task.store') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" id="task-name" class="form-control" placeholder="Tên công việc" value="{{ old('task') }}">
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="task-name" class="col-sm-4 control-label">Deadline</label>
                        <div class="col-sm-8">
                            <input type="date" name="deadline" id="task-deadline" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Status</label>
                        <div class="col-sm-8">
                            <select  class="form-control" name="status">
                                <option value="1">Đã làm</option>
                                <option value="0">Chưa làm</option>
                                <option value="-1">Không làm</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="task-name" class="col-sm-4 control-label">Content</label>
                        <div class="col-sm-8">
                            <input type="text" name="content" class="form-control" placeholder="Mô tả công việc">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Thêm công việc
                            </button>
                        </div>
                    </div>
                </form>
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
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach ( $tasks as $task )
                    <tr>
                        <td class="table-text"><div>{{ $task->name }}</div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('todo.task.complete', $task->id ) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
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
