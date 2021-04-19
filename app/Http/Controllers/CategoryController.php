<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Account;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh mục khoá học';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                $categories = Category::orderBy('updated_at','DESC')->get();
                return view('admin.categories.index',compact('categories', 'title'));
            }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới danh mục';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else
                return view('admin.categories.create', compact('title'));
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
                $category = new Category();
                $category->name = $request->category_name;
                $category->description = $request->category_desc;
                $category->save();
                Session::put('message','Thêm mới thành công');
                return redirect()->back();
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $title = 'Sửa danh mục';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                return view('admin.categories.edit', compact('category', 'title'));        
            }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                $category->name = $request->category_name;
                $category->description = $request->category_desc;
                $result = $category->save();
                if($result){
                    Session::put('message', 'Cập nhật danh mục thành công!');
                }else{
                    Session::put('message', 'Cập nhật danh mục thất bại!');
                }
                return Redirect::to(route('category.index'));
            }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category  $category)
    {
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                if($category->joinCourse->count()){
                    Session::put('message', 'Không thể xoá Danh mục đã có khoá học!');
                }
                else{
                    $category->delete();
                    Session::put('message', 'Xoá thành công!');
                }
                return Redirect::to(route('category.index'));
            }
        
        
    }
    // public function capnhat(Request $request, $id){
        
    //     $category = Category::find($id);
    //     $category->name = $request->category_name;
    //     $category->description = $request->category_desc;
    //     $result = $category->save();
    //     if($result){
    //         Session::put('message', 'Cập nhật danh mục thành công!');
    //     }else{
    //         Session::put('message', 'Cập nhật danh mục thất bại!');
    //     }
    //     return Redirect::to(route('category.index'));
    // }
}
