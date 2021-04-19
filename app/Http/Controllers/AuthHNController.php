<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

class AuthHNController extends Controller
{
    public function getLogin(){
    	if(Session::get('name') != null){
    		return Redirect::to(route('home'));	
    	}else return view('authHN.extends.login');
    	
    }
    public function postLogin(Request $req){
        
    	$email = $req->email;
    	$password = md5($req->password);

    	$result = Account::where('email',$email)->where('password', $password)->first();
    	$status=300;
    	
    	if($result){
            Session::put(['name' => $result->name, 'accountID' => $result->id]);
    		if($result->level == 1){
    			return Redirect::to(route('dashboard'));
    		}else
    		return Redirect::to(route('home'));
    	}else{
    		Session::put('message','Kiểm tra lại thông tin!');
    		return Redirect::to(route(('login')));
    	}
    }

    public function getRegister(){
    	if(Session::get('name') != null){
    		return Redirect::to(route('home'));	
    	}else return view('authHN.extends.register');
    	
    }
    
    public function postRegister(Request $req){
        $check = Account::find($req->email);

        // dd($check);
        // die();

        $user = new Account();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = md5($req->password);
        
        $result = $user->save();
        if($result){
            Session::put(['statusRegister' => 'Đăng ký thành công!']);
            return Redirect::to(route('register'));
        }

    }

    public function getReset(){
    	if(Session::get('name') != null){
    		return Redirect::to(route('home'));	
    	}else return view('authHN.extends.reset');
    }
    
    public function postReset(Request $req){

    }

    public function getLogout(){
        Session::put('name',null);
    	Session::put('accountID',null);
        session_destroy();
    	return Redirect::to(route('home'));
    }

    
}
