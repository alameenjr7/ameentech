<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function apropos()
    {
        return view('frontend.abouts.index');
    }

    public function blog()
    {
        return view('frontend.blogs.index');
    }

    public function cas()
    {
        return view('frontend.cas.index');
    }

    public function contact()
    {
        return view('frontend.contacts.index');
    }

    public function service()
    {
        return view('frontend.services.index');
    }
}
