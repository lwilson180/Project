<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        if(Gate::denies('manage-student-dashboard')) {
            abort(403);
        }
        return view('student.dashboard.index');
    }
}
