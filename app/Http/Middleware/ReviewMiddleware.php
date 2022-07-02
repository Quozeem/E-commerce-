<?php

namespace App\Http\Middleware;
//use App\Providers\RouteServiceProviderS;
use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ReviewMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    
     if (!Auth::guard('customer')->check()) {
            
               return redirect('reviewlogin');
             }

              return $next($request);
    
 
    }
}
