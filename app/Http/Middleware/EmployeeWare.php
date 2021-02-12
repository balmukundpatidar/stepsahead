<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class EmployeeWare
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
        $current_user_id= Auth::User()->id;
        $user_status = User::find($current_user_id);
        if ($user_status->user_type != 'Employee') {
            return redirect('/');
        }
        return $next($request);
    }
}
