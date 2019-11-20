<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //

    public function index()
    {
        return view('frontEnd.home.home');
    }

    public function software()
    {
        return view('frontEnd.software');
    }

}
