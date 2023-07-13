<?php

namespace App\Http\Middleware;

use App\Models\Student;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StudentCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('student')->id()) {
            $student = Student::where('id', Auth::guard('student')->id())->first();
            if (!empty($student)) {
                return $next($request);
            } else {
                return redirect('student/logout');
            }
        } else {
            return redirect('student/logout');
        }
    }
}
