<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        if(Gate::denies('manage-teacher-dashboard')) {
            abort(403);
        }
        return view('teacher.dashboard.index');
    }
}
