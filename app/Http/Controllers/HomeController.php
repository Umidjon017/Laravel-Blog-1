<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function _construct()
    // {
    //     return $this->middleware('auth')->only(['index']);
    // }

    public function index()
    {
        return view('home.index');
    }
}
