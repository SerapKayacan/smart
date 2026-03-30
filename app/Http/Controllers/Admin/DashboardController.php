<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $todayVisitors = Visitor::where('visited_date', $today)->count();
        $todayHits = Visitor::where('visited_date', $today)->sum('hits');
        $totalVisitors = Visitor::count();
        $totalHits = Visitor::sum('hits');

        return view('admin.dashboard.index', compact(
            'todayVisitors', 
            'todayHits', 
            'totalVisitors', 
            'totalHits'
        ));
    }
}
