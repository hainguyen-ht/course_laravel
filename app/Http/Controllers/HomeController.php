<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index(){
    	$data = Course::all();
        

    	return view('app.home', ['courses'=> $data]);
    }

    public function course(){
    	$data = Course::all();
    	
    	return view('app.course', ['courses' => $data]);
    }

    public function detail($id){
    	$data = Course::find($id);

    	return view('app.detail',['course'=>$data]);
    }
}
