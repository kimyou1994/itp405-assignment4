<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class MaintenanceMode
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
        $query = DB::table('configurations')
            ->where('name', '=', 'maintenance')
            ->first();

        if ($query->value === 'off')
            return $next($request);
        else
            return redirect('/maintenance');
    }
}
