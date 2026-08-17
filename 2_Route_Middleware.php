<?php
        // Create Routing 
    // Route Middleware in Laravel
    namespace App\Http\Middleware;

    use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

    class CheckAge
    {
        public function handle(Request $request, Closure $next): Response
        {
                // check for conditional
            if( $request->query('age') < 18) {
                return redirect('home');
            }

            // return the request
            return $next($request);

        }

    }








?>
