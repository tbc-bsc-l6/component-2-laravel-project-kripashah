<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentModuleController extends Controller
{
    public function index()
    {
        $student = Auth::user();

        $enrollments = $student->enrolledModules()->withPivot(['status', 'pass_status', 'enrolled_at', 'completed_at'])->get();
        $availableModules = Module::where('available', true)
            ->whereDoesntHave('students', function ($query) use ($student) {
                $query->where('users.id', $student->id);
            })
            ->orderBy('title')
            ->get();

        return view('student.modules', [
            'enrollments' => $enrollments,
            'availableModules' => $availableModules,
            'student' => $student,
        ]);
    }

    public function enroll(Module $module)
    {
        $student = Auth::user();

        if ($student->isOldStudent()) {
            return back()->withErrors(['module' => 'Old students cannot enroll']);
        }

        if (!$module->available) {
            return back()->withErrors(['module' => 'Module is unavailable']);
        }

        if ($student->currentEnrollmentsCount() >= 4) {
            return back()->withErrors(['module' => 'You have reached the maximum of 4 current modules']);
        }

        if (!$module->hasCapacity()) {
            return back()->withErrors(['module' => 'Module capacity reached']);
        }

        $student->enrolledModules()->attach($module->id, [
            'status' => 'current',
            'enrolled_at' => now(),
        ]);

        return back()->with('status', 'Enrolled successfully');
    }
}

