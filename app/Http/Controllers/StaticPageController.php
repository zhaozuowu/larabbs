<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{

    /**
     * StaticPageController constructor.
     */
    public function __construct()
    {
    }

    public function home()
    {
        return view('static_pages/home');
    }

    public function about()
    {
        return view('static_pages/about');
    }

    public function help()
    {
        return view('static_pages/help');
    }
}
