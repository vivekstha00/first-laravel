<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.page.home');
    } 
    public function showRegister()
    {
        return view('web.page.register');
    }

    public function showLogin()
    {
        return view('web.page.login');
    }

}
