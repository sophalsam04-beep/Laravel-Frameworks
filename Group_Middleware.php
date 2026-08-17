<?php
    // Login Admin Activity
    namespace App\Http\Middleware;

    use Closure;
use http\Env\Response;
use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;

    class LoginAdminActivity
    {
        public function handle(Request $request, Closure $next): Response
        {
                Log::info('admin Request', [
                    'user_id'=> $request->user()?->id,
                    'ip' => $request->ip(),
                    'url' => $request->fullUrl(),

                ]);

                    return $next($request);
        }
    }







?>
