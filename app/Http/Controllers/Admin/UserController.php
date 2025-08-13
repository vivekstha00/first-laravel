<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            flash()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        User::create($request->all());
        flash()->success('Operation completed successfully.');
        return redirect()->route('admin.page.index');
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.page.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:6',
        ]);

        if ($validator->fails()) {
            flash()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $user = User::findOrFail($id);
        $data = $request->all();
        
        // Only update password if it's provided
        if(empty($data['password'])) {
            unset($data['password']);
        }

        $user->update($data);
        flash()->success('User updated successfully.');
        return redirect()->route('admin.page.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        flash()->success('User deleted successfully.');
        return redirect()->route('admin.page.index');
    }

}
