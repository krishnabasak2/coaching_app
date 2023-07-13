<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Coaching;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachingAuth extends Controller
{
    public function login(Request $form)
    {
        $data['title'] = "Coaching Login";

        if (Request()->isMethod('POST')) {
            $form->validate([
                'email' => 'required|email',
                'password' => 'required'
            ], [], [
                'email' => 'Email',
                'password' => 'Password'
            ]);

            $admin = Coaching::where('email', $form->email)->where(['status' => 'active'])->first();
            $credential = [
                'email' => $form->email,
                'password' => $form->password
            ];

            if (!empty($admin) && Auth::guard('coaching')->attempt($credential)) {
                return redirect('coaching');
            } else {
                return redirect()->back()->with('message', 'Please input valid Credential! Or your ID has been Blocked!');
            }
        }
        return view('auth.login', $data);
    }

    public function logout()
    {
        Auth::guard('coaching')->logout();
        return redirect('coaching/login');
    }
}
