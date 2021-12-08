<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class CheckStatus
{
    public function handle($request, Closure $next)
    {
        $userID = session('loginUser');

        if (!$userID) {
            return redirect('/login');
        }
        return $next($request);
    }

}
