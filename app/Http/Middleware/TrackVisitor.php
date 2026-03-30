<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Carbon\Carbon;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Skip tracking for admin paths, API paths, and static assets
        if ($request->is('admin*') || $request->is('api*') || $request->is('_ignition*') || $request->ajax()) {
            return $next($request);
        }

        $ip = $request->ip();
        $date = Carbon::today()->toDateString();

        $visitor = Visitor::where('ip_address', $ip)
                          ->where('visited_date', $date)
                          ->first();

        if ($visitor) {
            $visitor->increment('hits');
        } else {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $request->userAgent(),
                'browser' => $this->getBrowser($request->userAgent()),
                'device_type' => $this->getDeviceType($request->userAgent()),
                'visited_date' => $date,
                'hits' => 1,
            ]);
        }

        return $next($request);
    }

    private function getBrowser($userAgent)
    {
        if (empty($userAgent)) {
            return 'Unknown';
        }
        
        if (strpos($userAgent, 'Opera') || strpos($userAgent, 'OPR/')) return 'Opera';
        elseif (strpos($userAgent, 'Edge') || strpos($userAgent, 'Edg/')) return 'Edge';
        elseif (strpos($userAgent, 'Chrome')) return 'Chrome';
        elseif (strpos($userAgent, 'Safari')) return 'Safari';
        elseif (strpos($userAgent, 'Firefox')) return 'Firefox';
        elseif (strpos($userAgent, 'MSIE') || strpos($userAgent, 'Trident/7')) return 'Internet Explorer';
        return 'Other';
    }

    private function getDeviceType($userAgent)
    {
        if (empty($userAgent)) {
            return 'Unknown';
        }
        
        $userAgent = strtolower($userAgent);
        if (strpos($userAgent, 'mobile') !== false || strpos($userAgent, 'android') !== false) {
            return 'Mobile';
        }
        if (strpos($userAgent, 'tablet') !== false || strpos($userAgent, 'ipad') !== false) {
            return 'Tablet';
        }
        return 'Desktop';
    }
}
