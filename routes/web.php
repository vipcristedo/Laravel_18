<?php

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
// Route::prefix('task')->group(function(){
// 	Route::delete('/delete/{id}', function ($id) {
// 		return redirect('/thanhcong/'.$id);
// 	})->name('todo.task.delete');
// });
Route::group([
	'prefix' => 'task'
],function(){
	Route::delete('/delete/{id}', function ($id) {
		return redirect('/thanhcong/'.$id);
	})->name('todo.task.delete');
	Route::get('/reset/{id}', function ($id) {
		dd('reset task '.$id);
	})->name('todo.task.reset');
	Route::get('/complete/{id}', function ($id) {
		dd('complete task '.$id);
	})->name('todo.task.complete');
});
// Route::group([
// 	'prefix' => 'task',
// 	'namspace' => 'admin',
// 	'name' => 'admin'
// ],function(){
// 	Route::delete('/delete/{id}', function ($id) {
// 		return redirect('/thanhcong/'.$id);
// 	})->name('todo.task.delete');
// });

Route::get('/thanhcong/{id}',function($id){
	dd('xoa thanh cong '.$id);
});

Route::get('/user/{id?}', function ($id = null) {
	if ($id==null) {
		dd('Hello there! My name is Phạm Quang Sáng');
	}else{
		dd('Hello user '.$id);
	}
});

Route::get('/', function () {
	return view('home');
});

Route::get('/user/{id}/post/{post}', function($id, $idPost) {
	return "This is post $idPost of user $id"; 
});