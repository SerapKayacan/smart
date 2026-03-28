<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\AppointmentService;
use Artesaos\SEOTools\Facades\SEOTools;

class ServicesDetailController extends Controller
{
    protected $appointmentService;

    public function __construct(AppointmentService $appointmentService)
    {
        $this->appointmentService = $appointmentService;
    }

    public function show(string $slug)
    {
        $service = Service::with('getCategory')
            ->where('is_active', true)
            ->where('slug', $slug)
            ->orderBy('sort_order', 'ASC')
            ->firstOrFail();

        SEOTools::setTitle($service->title . ' - Smart Grup');
        SEOTools::setDescription($service->meta_description ?: 'Smart Grup ' . $service->title . ' hizmeti hakkında detaylı bilgi alın.');
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::metatags()->setKeywords($service->tags->pluck('name')->toArray() ?: ['güvenlik', 'temizlik', 'smart grup']);
        if ($service->hasMedia('banner')) {
            SEOTools::addImages($service->getFirstMediaUrl('banner', 'large'));
        }

        $days = $this->appointmentService->getWeeklyAvailability($service);

        return view('frontend.services-detail', [
            'service' => $service,
            'days'    => $days,
        ]);
    }
}
