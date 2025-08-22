<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Log;
use Throwable;

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
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'age' => 'required|integer|min:1',
            'password' => 'required|string|min:8',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        try {
            $mailData = [
                'name' => $user->name,
                'email' => $user->email,
            ];
            
            Mail::to($user->email)->send(new WelcomeEmail($mailData));
            Log::info('Welcome email sent successfully to: ' . $user->email);
        } catch (Throwable $th) {
            Log::error('Error while sending welcome email: ' . $th->getMessage());
        }
        
        Auth::login($user);
        toastr()->success('Registration successful! Welcome email sent.');
        return redirect()->route('home');
    }

    public function showLogin()
    {
        return view('web.page.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            toastr()->success('Login successful!');
            return redirect()->intended(route('home'));
        } else {
            toastr()->error('Invalid credentials. Please try again.');
            return redirect()->back()->withInput($request->input());
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('Logged out successfully.');
        return redirect()->route('home');
    }

}
