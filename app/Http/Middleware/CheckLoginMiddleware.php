<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && ($_SESSION["role_admin"] == 'ADMIN' || $_SESSION["role_manage"] == 'MANAGE' || 
        $_SESSION["role_cv_admin"] == 'CV_ADMIN' || $_SESSION["role_cv_pro"] == 'CV_PRO' || $_SESSION["role_cv_basic"] == 'CV_BASIC' || $_SESSION["role_sale_admin"] == 'SALE_ADMIN')){
            return $next($request);
        };
        return redirect()->route('404_notFound');
    }
}
