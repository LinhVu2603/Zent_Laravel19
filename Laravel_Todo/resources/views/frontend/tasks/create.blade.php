@extends('layouts.master');

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
</style>
@endsection

@section('title')
Create Todo
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
                    </thead>
                    <tr>
                    	<form action="{{ route('task.store') }}" method="post">
                    		{{-- @method('delete') --}}
		    				{{ csrf_field() }}	
	                    	<td><input type="text" name="id"></td>
	                    	<td><input type="text" name="name"></td>
	                    	<td><input type="text" name="content"></td>
							<td><input type="text" name="status"></td>
	                    	<td><input type="text" name="deadline"></td>
	                 		<td><button class="btn btn-primary">Create</button></td>
                    	</form>
                    </tr>
                </table>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection