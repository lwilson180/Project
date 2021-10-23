<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LearnController extends Controller
{
    public function index()
    {
        if(Gate::denies('manage-learn')) {
            abort(403);
        }
        return view('student.learn.index');
    }
}

