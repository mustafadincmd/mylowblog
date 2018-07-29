<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
	public function index()

	{
		return view('posts.index');
		//burada posts klasörünün altındaki index.bladde.php 
		//dosyasına yönlendiriyor.
	}


	public function show()
	{
		return view ('posts.show');
	}
}
