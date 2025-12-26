<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('/login');
        }

        if ($user->isAdmin()) {
            return redirect()->route('admin.modules');
        }

        if ($user->isTeacher()) {
            return redirect()->route('teacher.modules');
        }

        return redirect()->route('student.modules');
    }
}

