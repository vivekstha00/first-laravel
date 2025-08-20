<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsersCount = User::where('role', 'user')->count();
        $totalAdminsCount = User::where('role', 'admin')->count();

        $statistics = [
            'totalUsersCount' => $totalUsersCount,
            'totalAdminsCount' => $totalAdminsCount,
        ];
        return view('admin.page.dashboard', compact('statistics'));
    }
}
