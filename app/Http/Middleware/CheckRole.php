<?php

namespace App\Http\Middleware;

use App\Models\Role;
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
    public function handle(Request $request, Closure $next, $role)
    {
        $roles = Role::all();

        foreach ($roles as $item) {
            if ($role == $item->name && auth()->user()->role_id != $item->id) {
                return back()->with('Halaman Tidak Ditemukan');
            }
        }

        return $next($request);
    }
}
