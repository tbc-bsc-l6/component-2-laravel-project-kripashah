<?php

use App\Models\{User,Module,Teacher,Assignment};
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    // MODULES
    public function modules() {
        return view('admin.modules', ['modules'=>Module::all()]);
    }

    public function storeModule(Request $r) {
        Module::create($r->all());
        return back();
    }

    public function toggleModule($id) {
        $m = Module::findOrFail($id);
        $m->available = !$m->available;
        $m->save();
        return back();
    }

    // TEACHERS
    public function teachers() {
        return view('admin.teachers',['teachers'=>Teacher::all()]);
    }

    public function storeTeacher(Request $r) {
        Teacher::create($r->all());
        return back();
    }

    public function destroyTeacher($id) {
        Teacher::destroy($id);
        return back();
    }

    // ASSIGN TEACHER
    public function assignTeacher(Request $r) {
        Assignment::create($r->all());
        return back();
    }

    // REMOVE STUDENT
    public function removeStudent($userId,$moduleId) {
        Module::find($moduleId)->students()->detach($userId);
        return back();
    }

    // CHANGE ROLE
    public function changeRole(Request $r,$id) {
        User::whereId($id)->update(['role'=>$r->role]);
        return back();
    }
}
