<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('web.page.car');
    }
}
