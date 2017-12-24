<?php

namespace App\Http\Middleware;

use Closure;

class checkTitleElement
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
        if(request()->input('author'))

         return redirect('/addpost');

        return $next($request);
    }
}

/*  != "Ben" */
/* ->withMessage("your name is not ben") */