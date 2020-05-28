@extends('layouts/master')


@section('css')
	<style type="text/css">
		#left{
			background-color: #e6e6e6 !important;
		}
		#ava img{
			height: 200px;
			width: 200px;
			margin-top: 100px;
			margin-left: 27%;
		}
		.tt1{
			font-size: 40px;
			text-align: center;
			color: black;
			font-family: 'Bebas Neue', cursive;
			margin-top: 8%;
		}
		.tt2{
			font-size: 20px;
			color: grey;
			text-align: center;
			font-family: 'Indie Flower', cursive;
			margin-top: 2%;
		}
		.content{
			color: white;
			width: 80%;
			margin-left: 10%;
			margin-top: 2%;	
		}
	</style>
@endsection

@section('title')
	Linh's Profile
@endsection

@section('script')
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-lg-4 bg-light" id="left">
				<div id="ava"><img src="https://giaitri.vn/wp-content/uploads/2019/07/avatar-la-gi-01.jpg"></div>
			</div>
			<div class="col-md-8 col-lg-8">
				<div class="tt1">Thông tin cá nhân </div>
				<div class="tt2">Tên tôi là {{$name}}</div>
				<div class="tt2">Năm sinh: {{$birthyear}}</div>
				<div class="tt2">Trường học: {{$school}}</div>
				<div class="tt2">Quê quán: {{$country}}</div>
				<div class="tt2">Giới thiệu bản thân: {{$profile}}
					<div class="content bg-danger">Sinh viên 3 không: không nhà, không xe, không người yêu.</div>
					<div class="content bg-info">Đam mê bóng rổ, bơi lội và gym.</div>
					<div class="content bg-warning">Thích du lịch trải nghiệm.</div>

				</div>
				<div class="tt2">Mục tiêu nghề nghiệp: {{$target}}</div>
			</div>
		</div>
	</div>
@endsection