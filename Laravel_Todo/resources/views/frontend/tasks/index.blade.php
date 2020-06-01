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
    			<form method="POST" action="{{ route('task.store') }}">
    				{{ csrf_field() }}
					<table class="table">
	                    <thead>
	                        <th>ID</th>
	                        <th>Name</th>
	                        <th>Deadline</th>
	                        <th>Action</th>
	                    </thead>
	                    <tr>
	                    	<td>1</td>	
	                    	<td>Bài tập về nhà Laravel</td>
	                    	<td>31/5</td>
	                        <td>
	                            <a href="" class="btn btn-primary">Show</a>
	                            <a href="" class="btn btn-success">Edit</a>
                            	<a href="{{ route('task.destroy',['id' => 1]) }}" class="btn btn-danger">Delete</a>
	                            <a href="" class="btn btn-info">Complete</a>
	                            <a href="" class="btn btn-warning">Redo</a>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<td>
	                    		<input type="text" name="id">
	                    	</td>
	                    	<td>
	                    		<input type="text" name="name" placeholder="Thing to do?">
	                    	</td>
	                    	<td>
								<input type="text" name="deadline" placeholder="Deadline">
	                    	</td>
	                        <td>
	                            <a href="" class="btn btn-primary">Show</a>
	                            <a href="" class="btn btn-success">Edit</a>
	                            <a href="{{ route('task.destroy',['id' => 2]) }}" class="btn btn-danger">Delete</a>
	                            <a href="" class="btn btn-info">Complete</a>
	                            <a href="" class="btn btn-warning">Redo</a>
	                        </td>
	                    </tr>
	                </table>
	    			{{-- <div class="ct1">
	    				<input type="checkbox" name="">Bài tập về nhà Laravel
	    				<a href="" class="btn btn-primary">Edit</a>
	    				<a href="" class="btn btn-danger">Delete</a>
	    			</div>
	    			<div class="ct1">
	    				<input type="checkbox" name="">Mua loa máy tính
	    				<a href="" class="btn btn-primary">Edit</a>
	    				<a href="" class="btn btn-danger">Delete</a>
	    			</div>
	    			<div class="ct1">
	    				<input type="checkbox" name="">Bài tập lớn Cơ sở dữ liệu
	    				<a href="" class="btn btn-primary">Edit</a>
	    				<a href="" class="btn btn-danger">Delete</a>
	    			</div>
	    			<div class="ct1">
	    				<input type="checkbox" name="" >
	    				<input type="text" name="name" placeholder="Thing to do??" >
	    				<input type="text" name="deadline" placeholder="Deadline" >
	    				<a href="" class="btn btn-primary">Edit</a>
	    				<a href="" class="btn btn-danger">Delete</a>
	    			</div> --}}
	    			<div class="ct1">
	    				<input type="submit" name="" class="btn btn-primary">
	    			</div>
	    		</form>
    		</div>
    	</div>
    </div>
@endsection

@section('script')
@endsection