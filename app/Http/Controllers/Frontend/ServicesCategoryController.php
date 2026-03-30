<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServicesCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::with('services')->where('is_active', true)->orderBy('sort_order', 'ASC')->get();

        SEOTools::setTitle('Hizmetlerimiz - Smart Grup');
        SEOTools::setDescription('Smart Grup güvenlik ve temizlik hizmetleri kategorileri. Profesyonel ekibimizle tüm ihtiyaçlarınıza çözüm sunuyoruz.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['güvenlik hizmetleri', 'temizlik hizmetleri', 'özel güvenlik', 'kurumsal temizlik', 'smart grup']);

        return view('frontend.services-category', [
            'serviceCategories' => $serviceCategories,
        ]);

    }

}
