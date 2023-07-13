<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherAuth extends Controller
{
    public function login(Request $form)
    {
        $data['title'] = "Teacher Login";

        if (Request()->isMethod('POST')) {
            $form->validate([
                'email' => 'required|email',
                'password' => 'required'
            ], [], [
                'email' => 'Email',
                'password' => 'Password'
            ]);

            $teacher = Teacher::where('email', $form->email)->first();
            $credential = [
                'email' => $form->email,
                'password' => $form->password
            ];

            if (!empty($teacher) && Auth::guard('teacher')->attempt($credential)) {
                return redirect('teacher');
            } else {
                return redirect()->back()->with('message', 'Please input valid Credential!');
            }
        }
        return view('auth.login', $data);
    }

    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect('teacher/login');
    }
}
