<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\User;
use Illuminate\Http\Request;

class AdminModuleController extends Controller
{
    public function index()
    {
        $modules = Module::with(['teachers', 'students'])->orderBy('title')->get();
        $teachers = User::where('role', User::ROLE_TEACHER)->orderBy('name')->get();
        $students = User::whereIn('role', [User::ROLE_STUDENT, User::ROLE_OLD_STUDENT])->orderBy('name')->get();

        return view('admin.modules', compact('modules', 'teachers', 'students'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => ['required', 'string', 'max:50', 'unique:modules,code'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'max_students' => ['nullable', 'integer', 'min:1', 'max:50'],
        ]);

        Module::create([
            'code' => $data['code'],
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'max_students' => $data['max_students'] ?? 10,
        ]);

        return redirect()->route('admin.modules')->with('status', 'Module created');
    }

    public function toggleAvailability(Module $module)
    {
        $module->update(['available' => !$module->available]);

        return back()->with('status', 'Availability updated');
    }

    public function assignTeacher(Request $request, Module $module)
    {
        $data = $request->validate([
            'teacher_id' => ['required', 'exists:users,id'],
        ]);

        $teacher = User::findOrFail($data['teacher_id']);

        if (!$teacher->isTeacher()) {
            return back()->withErrors(['teacher_id' => 'Selected user is not a teacher']);
        }

        $module->teachers()->syncWithoutDetaching([$teacher->id]);

        return back()->with('status', 'Teacher attached');
    }

    public function removeStudent(Module $module, User $user)
    {
        $module->students()->detach($user->id);

        return back()->with('status', 'Student removed from module');
    }
}

