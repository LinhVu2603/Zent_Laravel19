@extends('layouts.master') 

@section('css')
<style type="text/css">
	#header{
		width: 100%;	
		background-image: url('https://www.appmachine.com/wp-content/uploads/2016/02/No-Branding-Header-Background-1.jpg');
	}
	#header p{
		font-size: 48px;
		color: white;
		font-family: 'Chelsea Market', cursive;
		margin-top: 15%;
		padding-left: 5%;
	}
	#content{
		width: 100%;
	}
	.ct1{
		width: 100%;
		color: #3c829c;
		font-size: 24px;
		margin-left: 10%;
		margin-top: 1%;
	}
	.ct1 input{
		margin-right: 5%;
	}
	.ct1 input>a{
		margin-left: 15%;
	}
	.table{
		font-family: 'Chelsea Market', cursive;
	}
	.btn1{
		margin: 2%;
	}
</style>
@endsection

@section('title')
    Todolist
@endsection

@section('content')
    <div class="container-fluid">
    	<div class="row">
    		<div id="header">
    			<p>To Do</p>
    		</div>
    		<div id="content">
				<table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Tên công việc</th>
                        <th>Mô tả công việc</th>
                        <th>Trạng thái</th>
                        <th>Thời hạn công việc</th>
                        <th>Action</th>
                    </thead>
                	@foreach ($listWork as $row)
                    <tr>
                    	<form action="{{ route('task.store') }}" method="post">
                    		{{-- @method('delete') --}}
		    				{{ csrf_field() }}	
	                    	<td class = "td_id"><input type="text" value="{{ $row->id }}" name="id"></td>
	                    	<td><input type="text" value="{{ $row->name }}" name="name"></td>
	                    	<td><input type="text" value="{{ $row->content }}" name="content"></td>
							<td><input type="text" value="{{ $row->status }}" name="status"></td>
	                    	<td><input type="text" value="{{ $row->deadline }}" name="deadline"></td>
	                 		<td><button class="btn btn-primary">Submit</button></td>
                    	</form>
                        <td class="act">
                            <a href="" class="btn btn-primary">Show</a>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="{{ route('task.destroy', $row->id) }}" class="btn btn-danger">Delete</a>
                            <a href="{{ route('task.complete',$row->id) }}" class="btn btn-info">Complete</a>
                            <a href="{{ route('task.reComplete', $row->id) }}" class="btn btn-warning">Redo</a>
                        </td>
                    </tr>
                    @endforeach
                    <a href="{{ route('task.create') }}" class="btn btn-primary btn1">Create</a>
                </table>
    		</div>
    	</div>
    </div>
@endsection

@section('script')
@endsection