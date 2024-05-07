<?php

namespace App\Http\Middleware;

use App\Models\Pluging;
use App\Models\PlugingsRequest;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $userId = auth()->user()->id;

        $validRequests = PlugingsRequest::where('user_id', $userId)
            ->where('status', true)
            ->get();

        foreach ($validRequests as $validRequest) {
            if ($validRequest->pluging && $validRequest->pluging->key_word === 'job') {
                return $next($request);
            }
        }

        return back()->with('error', 'No valid pluging request found.');
    }
}
