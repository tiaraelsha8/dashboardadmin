<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\CkanService;

class CkanAuthMiddleware
{
    protected CkanService $ckan;

    public function __construct(CkanService $ckan)
    {
        $this->ckan = $ckan;
    }

    public function handle(Request $request, Closure $next)
    {
        // Check CKAN connection
        if (!$this->ckan->healthCheck()) {
            return response()->json([
                'error' => 'CKAN service unavailable'
            ], 503);
        }

        return $next($request);
    }
}