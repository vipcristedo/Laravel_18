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
Route::get('',function(){
	return view('home.home');
});
Route::get('/test/controller/{id?}','HomeController@index');
Route::get('/SettingController1','SettingController@index');

Route::group([
	'namespace'=>'Admin'
],function(){
	Route::get('/DashboardController','DashboardController@index');
	Route::get('/SettingController2','SettingController@index');
	Route::get('/SettingController3','Test\SettingController@index');
});

//Route::resource('/task','Frontend\TaskController');

// Route::prefix('task')->group(function(){
// 	Route::delete('/delete/{id}', function ($id) {
// 		return redirect('/thanhcong/'.$id);
// 	})->name('todo.task.delete');
// });
Route::group([
	'prefix' => 'task',
	'namespace' => 'Frontend'
],function(){
	Route::get('/','TaskController@index')->name('todo.task.index');

	Route::get('/create','TaskController@create')->name('todo.task.create');

	Route::post('/','TaskController@store')->name('todo.task.store');

	Route::delete('/{id}','TaskController@destroy')->name('todo.task.delete');

	Route::match(['put','patch'],'/{id}','TaskController@update')->name('todo.task.update');

	Route::get('/{id}','TaskController@show')->name('todo.task.show');

	Route::get('/{id}/edit','TaskController@edit')->name('todo.task.edit');

	Route::get('/reset/{id}','TaskController@reComplete')->name('todo.task.reset');
	Route::get('/complete/{id}','TaskController@complete')->name('todo.task.complete');
	Route::get('/reComplete/{id}','TaskController@reComplete')->name('todo.task.reComplete');
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

Route::get('/user/{id?}', function ($id = null) {
	if ($id==null) {
		dd('Hello there! My name is Phạm Quang Sáng');
	}else{
		dd('Hello user '.$id);
	}
});

Route::get('/user/{id}/post/{post}', function($id, $idPost) {
	return "This is post $idPost of user $id"; 
});

Route::prefix('sub') ->group( function () {
	Route::get('hello1',function(){
		return view('hello.hello1')->with('name','Sáng');
	});	
	Route::get('hello2',function(){
		
		return view('hello.hello2')->with([
			'name'=>'Vipcristedo',
			'year'=>'2014'
		]);
	});
});

Route::get('hello1',function(){
	return view('hello1');
});
Route::get('hello2',function(){
	return view('hello2',[
		'name'=>'Phạm Quang Sáng',
		'year'=>'2000',
		'school'=>'HUST',
		'records'=>[1,2]
	]);
});

Route::get('layout/home',function(){
	return view('layouts.home');
});
Route::get('layout/detail',function(){
	return view('layouts.detail');
});

Route::get('list',function(){
	$lists = [
        [
            'name' => 'Học View trong Laravel',
            'status' => 0
        ],
        [
            'name' => 'Học Route trong Laravel',
            'status' => 1
        ],
        [
            'name' => 'Làm bài tập View trong Laravel',
            'status' => -1
        ],
    ];
	return view('list')->with('lists',$lists);
});

Route::get('profile',function(){
	return view('profile',[
		'name'=>'Phạm Quang Sáng',
		'year'=>'2000',
		'school'=>'ĐH Bách Khoa Hà Nội',
		'que'=>'Hải Phòng',
		'gioiThieu'=>'<h3>K63-CNTT</h3>',
		'target'=>'Thực tập sớm, ra trường làm việc lương cao'
	]);
});

Route::get('BT/home',function(){
	return view('home.home');
});
