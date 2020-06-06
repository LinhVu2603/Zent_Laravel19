@extends('layouts.master')

@section('css')
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
                <form action="{{route('task.create')}}" method="get" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    {{-- <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div> --}}

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
                    <th>Trạng thái</th>
                    <th>Ưu tiên</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    	@foreach($listWork as $row)
                    <tr>
                        <td class="table-text"><div>{{-- Làm bài tập Laravel  --}}{{ $row->name }}</div></t>
                        <td class="table-text"><div>{{-- Làm bài tập Laravel  --}}{{ $row->status }}</div></td>
                        <td class="table-text"><div>{{-- Làm bài tập Laravel  --}}{{ $row->priority }}</div></td>
                        <td>
                            <a href="{{ route('task.show',$row->id) }}" class="btn btn-primary">
                                <i class="fa fa-btn fa-check"></i>Hiển thị
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task.edit',$row->id) }}" class="btn btn-primary">
                                <i class="fa fa-btn fa-check"></i>Sửa
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task.complete',$row->id) }}" class="btn btn-success" style="display: @if($row->status == 2) none; @else block; @endif">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>	
                        <td>
                            <a href="{{ route('task.reComplete',$row->id) }}" class="btn btn-success" style="display: @if($row->status == 2) block; @else none; @endif">
                                <i class="fa fa-btn fa-check"></i>Làm lại
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('task.destroy',$row->id) }}" method="POST">
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