<?php

namespace App\Http\Middleware;

use App\Models\Teacher;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TeacherCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('teacher')->id()) {
            $teacher = Teacher::where('id', Auth::guard('teacher')->id())->first();
            if (!empty($teacher)) {
                return $next($request);
            } else {
                return redirect('teacher/logout');
            }
        } else {
            return redirect('teacher/logout');
        }
    }
}
