<?php

namespace App\Providers;

use App\Models\ServiceCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        LogViewer::auth(function ($request) {
            return true;
        });

        View::composer(['frontend.layouts.header', 'frontend.layouts.footer'], function ($view) {
            $view->with('serviceCategories', ServiceCategory::with(['services' => function ($query) {
                $query->where('is_active', true)->orderBy('sort_order', 'ASC');
            }])->where('is_active', true)->orderBy('sort_order', 'ASC')->get());
        });
    }
}
