<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = 'dashboard';

        return view('layout.index',compact('data'));
    }
}
