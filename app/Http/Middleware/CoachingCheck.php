<?php

namespace App\Http\Middleware;

use App\Models\Coaching;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CoachingCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('coaching')->id()) {
            $coaching = Coaching::where('id', Auth::guard('coaching')->id())->where(['status' => 'active'])->first();
            if (!empty($coaching)) {
                return $next($request);
            } else {
                return redirect('coaching/logout');
            }
        } else {
            return redirect('coaching/logout');
        }
    }
}
