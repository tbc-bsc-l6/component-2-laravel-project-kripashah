<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherModuleController extends Controller
{
    public function index()
    {
        $teacher = Auth::user();
        $modules = $teacher->teachingModules()->with(['students'])->get();

        return view('teacher.modules', compact('modules'));
    }

    public function setResult(Request $request, Module $module, User $student)
    {
        $teacher = Auth::user();

        if (!$teacher->teachingModules()->whereKey($module->id)->exists()) {
            abort(403);
        }

        $data = $request->validate([
            'result' => ['required', 'in:pass,fail'],
        ]);

        $enrollment = $module->students()->where('users.id', $student->id)->first();

        if (!$enrollment) {
            return back()->withErrors(['student' => 'Student not enrolled in this module']);
        }

        $module->students()->updateExistingPivot($student->id, [
            'status' => 'completed',
            'pass_status' => $data['result'],
            'completed_at' => now(),
        ]);

        return back()->with('status', 'Result updated');
    }
}

