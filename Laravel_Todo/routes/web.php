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

// Route::prefix('backend')->namespace('Backend')->group(function(){
// 	Route::prefix('products')->group(function(){
// 		Route::get('/','ProductController@index')->name('backend.product.index');
// 	});
// 	Route::prefix('users')->group(function(){
// 		Route::get('/', 'UserController@index')->name('backend.user.index');
// 	});
// });
// Route::prefix('frontend')->namespace('Frontend')->group(function(){
// 	Route::prefix('products')->group(function(){
// 		Route::get('/', 'ProductController@index')->name('frontend.product.index');
// 	});
// 	Route::prefix('task')->group(function(){
// 		Route::get('/', 'TaskController@index')->name('task.index');
// 		Route::post('/','TaskController@store')->name('task.store');
// 		// Route::get('complete/{id}', 'Closure')->name('todo.task.complete');
// 		Route::get('create', 'TaskController@create')->name('task.create');
// 		// Route::get('reset/{id}', 'Closure')->name('todo.task.reset');
// 		Route::get('/show/{id}', 'TaskController@show')->name('task.show');
// 		// Route::get('/{task}', 'TaskController@update')->name('task.update');
// 		Route::match(['put','patch'], '/{id}', 'TaskController@update')->name('task.update');
// 		Route::delete('/destroy/{id}', 'TaskController@destroy')->name('task.destroy');
// 		Route::get('/edit/{id}', 'TaskController@edit')->name('task.edit');
// 		Route::get('complete/{id}', 'TaskController@complete')->name('task.complete');
// 		Route::get('recomplete/{id}', 'TaskController@reComplete')->name('task.reComplete');
// 	});
// });
// Route::resource('task','Frontend\TaskController');
	

//Route for DashboardControlller
Route::group([
	'namespace' => 'Backend',
	'prefix' => 'admin'
], function(){
    // Trang dashboard - trang chủ admin
	Route::get('/dashboard','DashboardController@index')->name('backend.dashboard');
    // Quản lý sản phẩm
	Route::group(['prefix' => 'products'], function(){
       Route::get('/', 'ProductController@index')->name('backend.products.index');
       Route::get('/create', 'ProductController@create')->name('backend.products.create');
    });
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', 'UserController@index')->name('backend.user.index');
        Route::get('/create', 'UserController@create')->name('backend.user.create');
    });
});