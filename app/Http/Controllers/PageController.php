<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Page Controller
     * -------------------------------------------------------------
     * This is a Controller for the basic pages
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Dashboard
     * @return voide
     */
    public function index()
    {
        return view('dashboard');
    }
}
