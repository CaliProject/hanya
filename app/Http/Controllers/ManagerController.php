<?php

namespace Hanya\Http\Controllers;

use Hanya\Culture;
use Illuminate\Http\Request;

use Hanya\Http\Requests;

class ManagerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('layouts.admin');
    }
    
    public function showCulture()
    {
        $cultures = Culture::all();
        $count = count($cultures);

        return view('admin.culture.home',compact('cultures','count'));
    }
    
    public function showCultureAdd()
    {
        return view('admin.culture.add');
    }
}
