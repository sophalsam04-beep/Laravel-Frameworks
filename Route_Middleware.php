<?php
    // Route Middleware
    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    use Symfony\Component\HttpFoundation\Response;

    class EnsureUserIsAdmin
    {
        public function handle(Request $request, Closure $next)
        {
            // checking if user is not logged or not an admin, block access
            if(!auth()->user() || auth()->user()->role !== 'admin'){
                return redirect('/home')->with('error', 'Access Denied!');
            }

            // pass the request to application

            return $next($request);
        }
    }




?>
