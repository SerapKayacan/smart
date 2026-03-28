<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reference;

class ReferencesController extends Controller
{
    public function index()
    {
        $securityReferences = Reference::where('is_active', true)
            ->where('category', 'security')
            ->orderBy('sort_order')
            ->get();

        $cleaningReferences = Reference::where('is_active', true)
            ->where('category', 'cleaning')
            ->orderBy('sort_order')
            ->get();

        return view('frontend.references', compact('securityReferences', 'cleaningReferences'));
    }
}
