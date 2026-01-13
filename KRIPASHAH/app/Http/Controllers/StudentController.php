<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $user = Auth::user();

        $currentModules = $user->modules()
            ->whereNull('completed_at')
            ->get();

        $completedModules = $user->modules()
            ->whereNotNull('completed_at')
            ->get();

        return view('student.dashboard', compact('currentModules','completedModules'));
    }

    // Available modules
    public function availableModules()
    {
        $user = Auth::user();

        if ($user->modules()->whereNull('completed_at')->count() >= 4) {
            return back()->with('error','Maximum 4 modules allowed');
        }

        $modules = Module::where('available', true)
            ->whereDoesntHave('students', function ($q) use ($user) {
                $q->where('users.id', $user->id);
            })->get();

        return view('student.modules', compact('modules'));
    }

    // Enrol
    public function enrol($id)
    {
        $user = Auth::user();

        if ($user->modules()->whereNull('completed_at')->count() >= 4) {
            return back()->with('error','Maximum 4 modules allowed');
        }

        $user->modules()->attach($id);
        return back()->with('success','Enrolled successfully');
    }

    // History
    public function history()
    {
        $completedModules = Auth::user()
            ->modules()
            ->whereNotNull('completed_at')
            ->get();

        return view('student.history', compact('completedModules'));
    }
}
