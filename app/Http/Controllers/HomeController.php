<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($id = 1){
    	echo ' <b> id= '.$id.'</b>';
    	return view('welcome');
    }
}
