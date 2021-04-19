<?php

namespace App\Http\Controllers;

use App\Models\CourseReg;
use App\Models\Course;
use App\Models\Account;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

class CourseRegController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseReg  $courseReg
     * @return \Illuminate\Http\Response
     */
    public function show(CourseReg $courseReg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseReg  $courseReg
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseReg $courseReg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseReg  $courseReg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseReg $courseReg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseReg  $courseReg
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseReg $courseReg)
    {
        //
    }
}
