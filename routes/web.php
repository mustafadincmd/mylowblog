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

	Route::post('insert', 'Controller@insert');

	Route::get('insert', function () {
	    return view('insert');
	});
	
	Route::get('/', 'PostsController@index');
	// Burada Controllerdan index fonksiyonuna gönderiyor

	//controller PostController 

	//Eloquent Model

	//migration => create_posts_table


	Route::get('/posts/{post}', 'PostsController@show');
	//burada parametreyi seçtiriyor.

	Route::post('/insert', 'Controller@insert');


	Route::get('verify', function () {
	    return 'get oldu';
	});

	Route::post('verify', function () {
	    return var_dump($_POST);
	});


	Route::get('/taslak2', function () {
	    return view('layouts.child');
	});

	Route::get('/taslak', function () {
	    return view('layouts.app');
	});
//


	Route::get('/tasks','TasksController@index');

	Route::get('/tasks/{task}','TasksController@show');




	Route::get('/', function () {
	    return view('index',[

	    	'name'=>'Mustafa'
	    ]);
	});




	Route::get('/about2', function () {

		return view('about2')->with('name','MustafaDinc');

	});


	Route::get('/about3', function(){
		$age='21';

		return view('about3',['age'=>$age]);

	});



	Route::get('/migration',function(){

		$tasks=DB::table('tasks')->get();
		return $tasks;
	

	});

	Route::get('/migration2/{task}',function($id){


		$task=DB::table('tasks')->find($id);
	
		dd($task);
	});




	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
