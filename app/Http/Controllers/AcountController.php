<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
if(!isset($_SESSION)) 
    { 
        session_start();
    }

class AcountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh sách người dùng';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                $accounts = Account::orderBy('updated_at','DESC')->get();
                $cc = Account::find(1)->joinCourse;
                return view('admin.accounts.index', compact('accounts', 'title'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm người dùng';
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                return view('admin.accounts.create', compact('title'));        
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
                $account = new Account();
                $account->name = $request->name;
                $account->email = $request->email;
                $account->password = md5($request->password);

                $account->save();
                Session::put('message','Thêm mới thành công');
                return redirect()->back();
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        if(Session::get('accountID') === null){
            return view('authHN.extends.login');
        }else if(Account::where('id',Session::get('accountID'))->first()->level !== 1){
                return Redirect::to(route('home'));
                // dd(Account::where('id',Session::get('accountID'))->first()->level);
            }else{
                return view('admin.accounts.edit', compact('account'));        
            }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        echo "hehe";
    }
}
