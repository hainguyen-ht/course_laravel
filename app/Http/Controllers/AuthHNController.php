<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AuthHNController extends Controller
{
    public function getLogin(){
    	if(Session::get('name') != null){
    		return Redirect::to(route('home'));	
    	}else return view('authHN.extends/login');
    	
    }

    public function postLogin(Request $req){
    	$email = $req->email;
    	$password = md5($req->password);

    	$result = Account::where('email',$email)->where('password', $password)->first();
    	$status=302;
    	
    	if($result){
    		Session::put('name',$result->name);
    		return Redirect::to(route('home'));
    	}else{
    		Session::put('message','Kiểm tra lại thông tin!');
    		return Redirect::to(route(('login')));
    	}
    }

    public function getRegister(){
    	if(Session::get('name') != null){
    		return Redirect::to(route('home'));	
    	}else return view('authHN/extends/register');
    	
    }
    
    public function postRegister(Request $req){

    }

    public function getReset(){
    	if(Session::get('name') != null){
    		return Redirect::to(route('home'));	
    	}else return view('authHN/extends/reset');
    }
    
    public function postReset(Request $req){

    }

    public function getLogout(){
    	Session::put('name',null);
    	return Redirect::to(route('home'));
    }

    
}
