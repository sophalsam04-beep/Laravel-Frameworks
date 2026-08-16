<?php

    // Middleware in Laravel
    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;

    class CheckAge
    {
        public function handle(Request $request, Closure $next)
        {
            if($request->age)
            {
                return redirect('home');
            }

            return $next($request);
        }
    }








?>
