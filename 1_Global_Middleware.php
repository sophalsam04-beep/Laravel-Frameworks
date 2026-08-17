<?php


    // Create Middleware in Global Middleware Laravel
    // Global Middleware
        namespace App\Http\Controllers;

        use Closure;
        use Illuminate\Http\Request;
        use Symfony\Component\HttpFoundation\Response;
        use Illuminate\Support\Facades\Log;

        class LogRequestMiddleware
        {
            // Handle incoming request
            public function handle(Request $request, Closure $next): Response
            {
                    // Before request after handle

                Log::info('incoming Request', [
                    'method' => $request->method(),
                    'url' => $request->fullUrl(),
                    'ip' => $request->ip(),

                ]);

                $response = $next($request);

                // After the response is Generate

                Log::info('Response Status', [
                    'status' => $response->getStatusCode(),
                ]);

                // return the response
                return $response;
            }
        }





?>
