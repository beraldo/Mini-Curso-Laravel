<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(Request $request)
    {
        return view('pages.home');
    }

    public function info(Request $request)
    {
        return view('pages.info');
    }

    public function contact(Request $request)
    {
        return view('pages.contact');
    }
}
