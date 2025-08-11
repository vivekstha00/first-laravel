<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.page.dashboard');
    }
    public function create()
    {
        // $users = User::latest{}->get{};
        return view('admin.page.user');
    }
    public function show()
    {
        return view('admin.page.addUser');
    }
    // public function store(Request $request)
    // {


    // }

    
}
