<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\User;

class TeacherController extends Controller
{
    public function dashboard(){
        return view('teacher_dashboard');
    }

    public function modules(){
        $teacher = auth()->user();
        $modules = $teacher->modules;
        return view('teacher_modules', compact('modules'));
    }

    public function students(Module $module){
        $students = $module->students;
        return view('teacher_students', compact('module','students'));
    }

    public function setGrade(Request $request, Module $module, User $student){
        $request->validate(['status'=>'required|in:pass,fail']);
        $module->students()->updateExistingPivot($student->id, [
            'status'=>$request->status,
            'completed_at'=>now()
        ]);
        return back()->with('success','Student graded!');
    }
}
