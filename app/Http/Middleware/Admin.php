<?php

namespace App\Http\Middleware;

use Brian2694\Toastr\Facades\Toastr;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class Admin
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('admin')->check()){

            $notification = array(
                'message' => 'Please Login First',
            );


            return redirect()->route('admin_login_view')->with($notification) ; 
        }
        return $next($request);
    }
}
