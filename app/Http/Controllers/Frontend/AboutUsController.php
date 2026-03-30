<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Artesaos\SEOTools\Facades\SEOTools;

class AboutUsController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order','ASC')->get();

        SEOTools::setTitle('Hakkımızda - Smart Grup');
        SEOTools::setDescription('Smart Grup hakkında bilgi alın. 11 yılı aşkın deneyimimizle güvenlik ve temizlik sektöründe güvenilir çözümler sunuyoruz.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['smart grup hakkında', 'güvenlik şirketi', 'temizlik şirketi', 'istanbul güvenlik']);

        return view('frontend.about-us', [
            'serviceCategories' => $serviceCategories,
        ]);
    }
}
