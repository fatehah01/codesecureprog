<?php // app/Http/Middleware/CustomEncryptCookies.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class CustomEncryptCookies
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
        // Custom logic to handle cookie encryption before request
        $response = $next($request);

        // Custom logic to handle cookie encryption after response
        // Example: Encrypt a specific cookie manually
        if ($request->hasCookie('my_custom_cookie')) {
            $cookieValue = encrypt($request->cookie('my_custom_cookie'));
            Cookie::queue('my_custom_cookie', $cookieValue, 60);
        }

        return $response;
    }
}
