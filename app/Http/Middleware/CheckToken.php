<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckToken
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
        if($request->method() != 'GET'){

        }
        var_dump($request->method());die;
        $token = $request->header('token');
        var_dump($token);die;
        var_dump($next($request));die;
        return $next($request);
    }
}
