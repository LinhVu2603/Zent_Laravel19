@extends('layouts/master')

@section('title')
List Page
@endsection

@section('css')
<style type="text/css">
	#title1{
		font-size: 36px;
		color: black;
	}
</style>
@endsection

<p id="title1">Danh sách</p>

@section('content')
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    	@foreach ($list as $key => $value)
        <tr>
            <td>{{$value['name']}}</td>
            <td>
            	@if($value['status'] == 0)
            	<p>Chưa làm</p>
				@elseif ($value['status'] == 1)
				<p>Đã hoàn thành</p>
				@elseif ($value['status'] == -1)
				<p>Không thực hiện</p>
				@endif
            </td>
        </tr>
		@endforeach
    </tbody>
</table>
@endsection