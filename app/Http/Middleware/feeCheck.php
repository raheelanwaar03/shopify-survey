<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class feeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->status == 'approved') {
            return $next($request);
        }
        if (auth()->user()->status == 'rejected') {
            return redirect()->route('Plans')->with('error', 'Your account has been rejected give us correct information');
        } else {
            return redirect()->route('Welcome')->with('error', 'Your Account is Pending wait for Approval');
        }
    }
}
