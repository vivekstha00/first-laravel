<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Log;
use Throwable;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
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

            User::create($request->all());

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
        $user = User::findOrFail($id);
        return view('admin.page.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        if ($validator->fails()) {
            flash()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $user = User::findOrFail($id);
        $data = $request->all();
        
        $user->update($data);
        flash()->success('User updated successfully.');
        return redirect()->route('admin.page.index');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        flash()->success('User deleted successfully.');
        return redirect()->route('admin.page.index');
    }

}
