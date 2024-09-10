<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // empty空的
        // isset有設定資料
        // 通常empty=isset，只有值是0時例外
        // 通常0 empty(0)回傳值為true，isset(0)回傳值為false
        if (empty(session()->get("manager"))) {
            return redirect("/admin");
            exit;
        }
        return $next($request);
    }
}
