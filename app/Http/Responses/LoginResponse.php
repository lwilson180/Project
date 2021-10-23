<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $role = Auth::user()->role;

        if ($role == 'admin') {
            return redirect('admin/dashboard');
        } else if ($role == 'teacher'){
            return redirect('teacher/dashboard');
        } else if ($role == 'student'){
            return redirect('student/dashboard');
    }

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(config('fortify.home'));
    }

}
