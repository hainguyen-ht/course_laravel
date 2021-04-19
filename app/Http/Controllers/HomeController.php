<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Account;
use App\Models\Category;
use App\Models\CourseReg;

use Session;
use Illuminate\Support\Facades\Redirect;
if(!isset($_SESSION)) 
    { 
        session_start(); 
}

class HomeController extends Controller
{
    public function index(){
        
    	$data = Course::get();
        $account = Account::get();
        $session = Session::get('accountID');

        $session = $account->find($session);
        $title = 'Trang chủ | Học lập trình miễn phí';
        // dd($x);
        
        // $cc = Course::find(13)->joinAccount;
        // $cc = $data->find(13)->joinAccount;
        // dd($session);
        // dd($account->find($idx));

    	return view('app.home', compact('data', 'account', 'session', 'title'));
    }

    public function course(){
    	$data = Course::all();
        $account = Account::get();
        $session = Session::get('accountID');
        $session = $account->find($session);
        $category = Category::get();
        $title = 'Danh sách khoá học | Học lập trình miễn phí';
        
    	
    	return view('app.course', compact('data', 'session', 'category', 'title'));
    }

    public function detail($id){
    	$data = Course::find($id);
        $account = Account::get();
        $session = Session::get('accountID');
        $session = $account->find($session);
        $title = 'Thông tin khoá học | Học lập trình miễn phí';
        if(isset($session->id)){
            if(CourseReg::where(['course_id' => $id, 'account_id' => $session->id])->first() != null){
                Session::put(['statusReg' => 'Đã đăng ký']);
            }else{
                Session::put(['statusReg' => 'Đăng ký']);
            }
        }
    	return view('app.detail',['course' => $data, 'session' => $session, 'title' => $title ]);
    }

    public function reg($courseID, $accountID){
        
        $courseReg = new CourseReg();
        $course = Course::find($courseID);
        $account = Account::find($accountID);
        // dd($account->coin - $course->price);
        if(CourseReg::where(['course_id' => $courseID, 'account_id' => $accountID])->first() != null){
            Session::put(['statusReg' => 'Đã đăng ký']);
            return Redirect::to(route('detail', $courseID));
        }
        if($account->coin >= $course->price){
            $account->coin = $account->coin-$course->price;
            $account->save();
            $courseReg->course_id = $courseID;
            $courseReg->account_id = $accountID;
            $courseReg->save();

            Session::put([
                    'statusReg' => 'Đã đăng ký', 
                    'stateReg' => '<script>alert("Đăng ký thành công!")</script>'
            ]);
            return Redirect::to(route('detail', $courseID));
        }else{
            Session::put(['statusReg' => 'Đăng ký', 'stateReg' => '<script>alert("Không đủ coin")</script>']);
            return Redirect::to(route('detail', $courseID));
        }
    }
}
