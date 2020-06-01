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
	                        <th>Name</th>
	                        <th>Deadline</th>
	                        <th>Action</th>
	                    </thead>
	                    <tr>
	                    	<form action="{{ route('task.store') }}" method="post">
			    				{{ csrf_field() }}	
		                    	<td><input type="text" value="{{ $listWork['w1']['id']}}" name="id"></td>
		                    	<td><input type="text" value="{{ $listWork['w1']['name']}}" name="name"></td>
		                    	<td><input type="text" value="{{ $listWork['w1']['deadline']}}" name="deadline"></td>
		                 		<td><button class="btn btn-primary">Submit</button></td>
	                    	</form>
	                        <td>
	                            <a href="" class="btn btn-primary">Show</a>
	                            <a href="" class="btn btn-success">Edit</a>
	                            <a href="{{ route('task.destroy', $listWork['w1']['id']) }}" class="btn btn-danger">Delete</a>
	                            <a href="{{ route('task.complete', $listWork['w1']['id']) }}" class="btn btn-info">Complete</a>
	                            <a href="{{ route('task.reComplete', $listWork['w1']['id']) }}" class="btn btn-warning">Redo</a>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<form action="{{ route('task.store') }}" method="post">
			    				{{ csrf_field() }}	
		                    	<td><input type="text" value="{{ $listWork['w2']['id']}}" name="id"></td>
		                    	<td><input type="text" value="{{ $listWork['w2']['name']}}" name="name"></td>
		                    	<td><input type="text" value="{{ $listWork['w2']['deadline']}}" name="deadline"></td>
		                 		<td><button class="btn btn-primary">Submit</button></td>
	                    	</form>
	                        <td>
	                            <a href="" class="btn btn-primary">Show</a>
	                            <a href="" class="btn btn-success">Edit</a>
	                            <a href="{{ route('task.destroy', $listWork['w2']['id']) }}" class="btn btn-danger">Delete</a>
	                            <a href="{{ route('task.complete', $listWork['w2']['id']) }}" class="btn btn-info">Complete</a>
	                            <a href="{{ route('task.reComplete', $listWork['w2']['id']) }}" class="btn btn-warning">Redo</a>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<form action="{{ route('task.store') }}" method="post">
			    				{{ csrf_field() }}	
		                    	<td><input type="text" value="{{ $listWork['w3']['id']}}" name="id"></td>
		                    	<td><input type="text" value="{{ $listWork['w3']['name']}}" name="name"></td>
		                    	<td><input type="text" value="{{ $listWork['w3']['deadline']}}" name="deadline"></td>
		                 		<td><button class="btn btn-primary">Submit</button></td>
	                    	</form>
	                        <td>
	                            <a href="" class="btn btn-primary">Show</a>
	                            <a href="" class="btn btn-success">Edit</a>
	                            <a href="{{ route('task.destroy', $listWork['w3']['id']) }}" class="btn btn-danger">Delete</a>
	                            <a href="{{ route('task.complete', $listWork['w3']['id']) }}" class="btn btn-info">Complete</a>
	                            <a href="{{ route('task.reComplete', $listWork['w3']['id']) }}" class="btn btn-warning">Redo</a>
	                        </td>
	                    </tr>
	                </table>
    		</div>
    	</div>
    </div>
@endsection

@section('script')
@endsection