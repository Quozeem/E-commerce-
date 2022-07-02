<?php

namespace App\Http\Middleware;
//use App\Providers\RouteServiceProviderS;
use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ViewproductMiddleware
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
    
     if ((session('productdetails')) == null) {
            
               return redirect('/');
             }

              return $next($request);
    
 
    }
}
