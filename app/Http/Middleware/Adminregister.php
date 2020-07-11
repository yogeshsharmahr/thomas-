<?php

namespace App\Http\Middleware;

use Closure;

class Adminregister
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->is_admin == 1)
        {
        return $next($request);
        }
        elseif(auth()->user()->is_admin == 2)
    {
        return redirect()->route('student.home')->with('error',"You don't have admin access.");

    }elseif(auth()->user()->is_admin ==3){
        return redirect()->route('faculty.home')->with('error',"You don't have admin access");
    }
    return redirect('home');
  }
}
