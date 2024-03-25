<?php
namespace App\Http\Middleware;
use Closure;
use App\Models\Backend\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
         return $request->expectsJson() ? null : route('login');
       
    }
}
