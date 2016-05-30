<?php

namespace Hanya\Http\Controllers;

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
}
