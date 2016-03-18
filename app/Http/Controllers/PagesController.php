<?php

namespace Tesjil\Http\Controllers;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
