<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Category;
use App\Models\Course;
use Session;
use Illuminate\Support\Facades\Redirect;
if(!isset($_SESSION)) 
    { 
        session_start(); 
}
class AdminController extends Controller
{
    public function dashboard()
    {
        $courses = Course::get();
        $accounts = Account::get();
        $categories = Category::get();
        // dd(Session::get('accountID'));
        // dd(Account::where('id',Session::get('accountID'))->first()->level);
        
    	if(Session::get('accountID') === null){
    		return view('authHN.extends.login');
    	}else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else
                return view('admin.dashboard', compact('courses', 'accounts', 'categories'));
    }

    public function test(){
    	return view('admin.includes.sidebar');
    }


}
