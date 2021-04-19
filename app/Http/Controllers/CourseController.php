<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Account;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh sách khoá học';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                $category = Category::get();
                $courses = Course::orderBy('updated_at','DESC')->get();
                return view('admin.courses.index',compact('category','courses', 'title'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới khoá học';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                $category = new Category();
                $category = $category->get();
                return view('admin.courses.create', compact('category', 'title'));
            } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                $course = new Course();
                $request->img = $request->img->store('uploads', 'public');
                $course->name = $request->name;
                $course->category_id = $request->category_id;
                $course->price = $request->price;
                $course->img = $request->img;
                $course->description = $request->description;
                $course->content = $request->content;

                $course->save();
                Session::put('message','Thêm mới thành công');
                return redirect()->back();
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $title = 'Sửa khoá học';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
            }else{
                $category = Category::get();
                return view('admin.courses.edit', compact('course', 'category', 'title'));
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
            }else{
                $request->img = ($request->img !== null) ? $request->img->store('uploads', 'public') : substr($request->img, 8);
                $course->name = $request->name;
                $course->category_id = $request->category_id;
                $course->price = $request->price;
                // if($request->img !== null){
                //   $course->img = $request->img->store('uploads', 'public');  
                // }
                $course->description = $request->description;
                $course->content = $request->content;

                $course->save();
                Session::put('message','Cập nhật thành công');
                return Redirect::to(route('course.index'));
            }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
            }else{
                if($course->joinAccount->count() !== 0){
                    Session::put('message', 'Không thể xoá Khoá học đã có người đăng ký!');
                }
                else{
                    $course->delete();
                    Session::put('message', 'Xoá thành công!');
                }
                return Redirect::to(route('course.index'));
            }  
    }
}
