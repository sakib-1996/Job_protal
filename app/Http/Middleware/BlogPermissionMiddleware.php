<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\PlugingsRequest;
use Symfony\Component\HttpFoundation\Response;

class BlogPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $userId = auth()->user()->id;
    
        $validRequests = PlugingsRequest::where('user_id', $userId)
            ->where('status', true)
            ->get(); // Get a collection of PlugingsRequest models
    
        foreach ($validRequests as $validRequest) {
            if ($validRequest->pluging && $validRequest->pluging->key_word === 'blog') {
                return $next($request);
            }
        }
    
        return redirect()->back()->with('error', 'No valid pluging request found.');
    }
}
