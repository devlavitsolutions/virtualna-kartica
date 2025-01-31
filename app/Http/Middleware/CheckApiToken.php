<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        // Delete 'Bearer ' prefix if it exists.
        $token = str_replace('Bearer ', '', $token);
        
        // Checking if token exists in database.
        $tokenExists = DB::table('api_tokens')->where('token_value', $token)->exists();

        if (!$tokenExists) {
            // If token isn't valid
            return response()->json(['message' => 'Unauthorized'], 401);
        }

       return $next($request);
    }
}
