<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->get();

        return view('admin.users', compact('users'));
    }

    public function storeTeacher(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => User::ROLE_TEACHER,
        ]);

        return redirect()->route('admin.users')->with('status', 'Teacher created');
    }

    public function updateRole(Request $request, User $user)
    {
        $data = $request->validate([
            'role' => ['required', 'in:admin,teacher,student,old_student'],
        ]);

        $user->update(['role' => $data['role']]);

        return back()->with('status', 'Role updated');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('status', 'User removed');
    }
}

