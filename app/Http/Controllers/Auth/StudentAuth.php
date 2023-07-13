<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAuth extends Controller
{
    public function login(Request $form)
    {
        $data['title'] = "Student Login";

        if (Request()->isMethod('POST')) {
            $form->validate([
                'email' => 'required|email',
                'password' => 'required'
            ], [], [
                'email' => 'Email',
                'password' => 'Password'
            ]);

            $student = Student::where('email', $form->email)->first();
            $credential = [
                'email' => $form->email,
                'password' => $form->password
            ];

            if (!empty($student) && Auth::guard('student')->attempt($credential)) {
                return redirect('student');
            } else {
                return redirect()->back()->with('message', 'Please input valid Credential!');
            }
        }
        return view('auth.login', $data);
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('student/login');
    }
}
