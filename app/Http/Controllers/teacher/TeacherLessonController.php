<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TeacherLessonController extends Controller
{
    public function index()
    {
        if(Gate::denies('manage-lesson')) {
            abort(403);
        }
        return view('teacher.lessons.index');
    }
}
