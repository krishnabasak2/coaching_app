<?php

namespace App\Http\Controllers\Coaching;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        $data['title'] = "Coaching";
        return view('coaching.dashboard', $data);
    }
}
