<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexView()
    {
        return view('pages.index');
    }

    public function catalogView()
    {
        return view('pages.catalog');
    }
    public function aboutView()
    {
        return view('pages.about');
    }
    public function contactView()
    {
        return view('pages.contact');
    }
    public function profileView()
    {
        return view('pages.profile');
    }
    public function basketView()
    {
        return view('pages.basket');
    }
}
