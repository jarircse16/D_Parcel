<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ForceTrailingSlash
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
     public function handle($request, Closure $next)
     {
         $url = $request->url();

         // Check if the URL doesn't end with a slash and doesn't have a query string
         if (!Str::endsWith($url, '/') && empty($request->getQueryString())) {
             return redirect(rtrim($url, '/') . '/?', 301);
         }

         return $next($request);
     }
}
