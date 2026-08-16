<?php

        // Global Middleware and Logic Middleware

        // Global Middleware and Logic Middleware
    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Log;
        use Symfony\Component\HttpFoundation\Response;

    class LogAllRequest{
        public function handle(Request $request, Closure $next): Response
        {
            Log::info('Incoming Request', [
                'method' => $request->method(),
                'url' => $request->fullUrl(),
                'ip' => $request->ip(),
                'time' => now(),
            ]);

            // call request to middleware

            $response = $next($request);

            // after response created

            Log::info('Response Status', [
                'status' => $response->getStatusCode(),
            ]);

            return $response;
        }
    }









?>
