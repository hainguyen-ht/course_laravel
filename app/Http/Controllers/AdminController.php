<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view('admin_layout');
    }


    public function test(){
    	return view('admin.includes.sidebar');
    }
}
