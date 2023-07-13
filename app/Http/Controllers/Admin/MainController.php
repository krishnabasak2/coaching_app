<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        try {
            $data['title'] = 'Dashboard';
            return view('admin.dashboard', $data);
        } catch (\Throwable $th) {
            $data['status'] = "500";
            return view('error', $data);
        }
    }
}
