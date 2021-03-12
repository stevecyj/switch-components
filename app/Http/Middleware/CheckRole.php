<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role, $name)
    {
        // echo '我是 ' . $role . ', ' . '<br />';
        // echo '我的名字是 ' . $name  . '<br />';
        // return $next($request);

        if (!($role =='緋紅女巫')) {
            return redirect("/");
        }
        return $next($request);
    }
}
