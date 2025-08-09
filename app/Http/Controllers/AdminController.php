<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('web.page.dashboard');
    }
    public function create()
    {
        return view('web.page.user');
    }
    public function show()
    {
        return view('web.page.addUser');
    }
}
