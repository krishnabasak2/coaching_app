<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('admin')->id()) {
            $admin = Admin::where('id', Auth::guard('admin')->id())->first();
            if (!empty($admin)) {
                return $next($request);
            } else {
                return redirect('admin/logout');
            }
        } else {
            return redirect('admin/logout');
        }
    }
}
