<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
	$url = route('get.user.post');
	$url2 = route('get.post.comment',[
		'id' => 3,
		'comment' => 'abcsd'
	]);
	// dd($url2);
    return view('welcome');
});

Route::prefix('admin')->group(function(){
	Route::prefix('users')->group(function(){
		Route::get('/', function () {
			dd('User index');
		})->name('admin.user.index');

		Route::get('create', function () {
			dd('User create');
		});
		Route::get('update', function () {
			// dd('User update');
			return 'a';
		});
	});
});

// Bài 2.1
Route::get('task/complete/3', function (){
	return view('welcome');
})->name('todo.task.complete');

Route::get('task/reset/3', function (){
	return view('welcome');
})->name('todo.task.reset');

//Group bài 2.1

Route::prefix('task')->group(function(){
	Route::get('complete/3', function () {
		dd('Tính năng hoàn thành!');
	})->name('todo.task.complete');

	Route::get('reset/3', function () {
		dd('Tính năng làm lại!');
	})->name('todo.task.reset');;
});