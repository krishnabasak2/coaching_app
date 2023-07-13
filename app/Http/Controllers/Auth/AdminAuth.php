<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuth extends Controller
{
    public function login(Request $form)
    {
        $data['title'] = "Admin Login";

        if (Request()->isMethod('POST')) {
            $form->validate([
                'email' => 'required|email',
                'password' => 'required'
            ], [], [
                'email' => 'Email',
                'password' => 'Password'
            ]);

            $admin = Admin::where('email', $form->email)->first();
            $credential = [
                'email' => $form->email,
                'password' => $form->password
            ];

            if (!empty($admin) && Auth::guard('admin')->attempt($credential)) {
                return redirect('admin');
            } else {
                return redirect()->back()->with('message', 'Please input valid Credential!');
            }
        }
        return view('auth.login', $data);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function api_login(Request $form)
    {
        $admin = Admin::where('email', $form->email)->first();
        $credential = [
            'email' => $form->email,
            'password' => $form->password
        ];

        if (!empty($admin) && Auth::guard('admin')->attempt($credential)) {
            return $admin->createToken('token-name', ['admin'])->plainTextToken;
        } else {
            return false;
        }
    }

    public function get_admin()
    {
        $admin = Admin::where('id', Auth::id())->first();
        return $admin;
    }
}
