<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Log;
use Throwable;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.page.index', compact('users'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'age' => 'required|numeric',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'role' => 'user',
            ]);

            if ($validator->fails()) {
                flash()->warning('Please check your form and try again.');
                return redirect()->back()
                    ->withInput($request->input())
                    ->withErrors($validator->errors());
            }

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'password' => Hash::make($request->password), // Hash the password
                'role' => $request->role,
            ]);

            try {
                Mail::to($request->email)->send(new WelcomeEmail([
                    'name' => $request->name,
                ]));
            } catch (Throwable $th) {
                Log::debug('Error while sending email.');
            }

            flash()->success('Operation completed successfully.');
            return redirect()->route('admin.page.index');
        } catch (Throwable $th) {
            flash()->error('Operation failed.');
            return redirect()->route('admin.page.index');
        }
    }

    
    public function edit($id)
    {
        $user = User::find($id);
        
        if (!$user) {
            flash()->error('User not found.');
            return redirect()->route('admin.page.index');
        }
        
        return view('admin.page.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required|in:user,admin', 
        ]);

        if ($validator->fails()) {
            flash()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $user = User::find($id);
        
        if (!$user) {
            flash()->error('User not found.');
            return redirect()->route('admin.page.index');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'role' => $request->role,
        ]);

        flash()->success('User updated successfully.');
        return redirect()->route('admin.page.index');
    }

    public function delete($id)
    {
        $user = User::find($id);
        
        if (!$user) {
            flash()->error('User not found.');
            return redirect()->route('admin.page.index');
        }
        
        $user->delete();
        flash()->success('User deleted successfully.');
        return redirect()->route('admin.page.index');
    }

}
