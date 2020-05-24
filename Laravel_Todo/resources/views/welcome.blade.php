<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a{
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Thông tin cá nhân
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Họ và tên:</a> Vũ Thùy Linh
                <a href="https://laracasts.com">Năm sinh:</a>03/03/1999
                <a href="https://laravel-news.com">Trường đang theo học:</a>Đại học Bách Khoa Hà Nội
                <a href="https://blog.laravel.com">Mục tiêu sau khi kết thúc khóa Laravel:</a>Thành thạo lập trình với Framework laravel và có công việc thực tập.
            </div>
        </div>
        <form action="/post" method="post">
            {{ csrf_field() }}
            <input type="text" name="abd">
            <input type="submit" name="abc">
        </form>
        
        <a href="{{route('todo.task.complete')}}">Finish</a>
        <a href="{{route('todo.task.reset')}}">Reset</a>
    </body>
</html>
