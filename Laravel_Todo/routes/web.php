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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/abc', function () {
// 	$url = route('get.user.post');
// 	$url2 = route('get.post.comment',[
// 		'id' => 3,
// 		'comment' => 'abcsd'
// 	]);
// 	// dd($url2);
//     return view('welcome');
// });

// Route::prefix('admin')->group(function(){
// 	Route::prefix('users')->group(function(){
// 		Route::get('/', function () {
// 			dd('User index');
// 		})->name('admin.user.index');

// 		Route::get('create', function () {
// 			dd('User create');
// 		});
// 		Route::get('update', function () {
// 			// dd('User update');
// 			return 'a';
// 		});
// 	});
// });

// // Bài 2.1
// Route::get('task/complete/{id}', function ($id){
// 	return view('welcome');
// })->name('todo.task.complete');

// Route::get('task/reset/{id}', function ($id){
// 	return view('welcome');
// })->name('todo.task.reset');

// //Group bài 2.1

// Route::prefix('task')->group(function(){
// 	Route::get('complete/{id}', function ($id) {
// 		dd('Tính năng hoàn thành!');
// 	})->name('todo.task.complete');

// 	Route::get('reset/{id}', function ($id) {
// 		dd('Tính năng làm lại!');
// 	})->name('todo.task.reset');;
// });

// Route::get('/profile',function(){
// 	return view('profile')->with([
// 		'name' => 'Vũ Thùy Linh',
// 		'birthyear' => '1999',
// 		'school' => 'Đại học Bách Khoa Hà Nội',
// 		'country' => 'Hải Phòng',
// 		'profile' => 'Đây là 1 cái profile:',
// 		'target' => 'Developement'
// 	]);
// });

// Route::get('/list', function(){
// 	return view('list')->with('list',[
//         [
//             'name' => 'Học View trong Laravel',
//             'status' => 0
//         ],
//         [
//             'name' => 'Học Route trong Laravel',
//             'status' => 1
//         ],
//         [
//             'name' => 'Làm bài tập View trong Laravel',
//             'status' => -1
//         ]
//     ]);
// });

// Route::get('list', 'Admin\AdminListController@index');
// Route::resource('task','frontend\TaskController');
Route::prefix('backend')->namespace('Backend')->group(function(){
	Route::prefix('products')->group(function(){
		Route::get('/','ProductController@index')->name('backend.product.index');
	});
	Route::prefix('users')->group(function(){
		Route::get('/', 'UserController@index')->name('backend.user.index');
	});
});
Route::prefix('frontend')->namespace('Frontend')->group(function(){
	Route::prefix('products')->group(function(){
		Route::get('/', 'ProductController@index')->name('frontend.product.index');
	});
	Route::prefix('task')->group(function(){
		Route::get('/', 'TaskController@index')->name('task.index');
		Route::post('store','TaskController@store')->name('task.store');
		// Route::get('complete/{id}', 'Closure')->name('todo.task.complete');
		Route::get('create', 'TaskController@create')->name('task.create');
		// Route::get('reset/{id}', 'Closure')->name('todo.task.reset');
		Route::get('/show/{id}', 'TaskController@show')->name('task.show');
		Route::get('/{task}', 'TaskController@update')->name('task.update');
		Route::get('/destroy/{id}', 'TaskController@destroy')->name('task.destroy');
		Route::get('/edit/{id}', 'TaskController@edit')->name('task.edit');
		Route::get('complete/{id}', 'TaskController@complete')->name('task.complete');
		Route::get('recomplete/{id}', 'TaskController@reComplete')->name('task.reComplete');
	});
});