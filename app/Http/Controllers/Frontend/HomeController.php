<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Service;
use App\Models\TabPanel;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class HomeController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::where('is_active', true)->withCount('services')->orderBy('sort_order','ASC')->get();
        $carousels = Carousel::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $tabPanels = TabPanel::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $services = Service::where('is_active', true)->orderBy('sort_order','ASC')->get();

        SEOTools::setTitle('Ana Sayfa');
        SEOTools::setDescription('Smart Grup olarak İstanbul\'da profesyonel özel güvenlik ve temizlik hizmetleri sunuyoruz. Sertifikalı personel, 7/24 kesintisiz hizmet.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['özel güvenlik', 'güvenlik hizmetleri', 'temizlik hizmetleri', 'smart grup', 'istanbul güvenlik']);

        return view('frontend.home', [
            'serviceCategories' => $serviceCategories,
            'carousels'         => $carousels,
            'tabPanels'         => $tabPanels,
            'services'          => $services,
        ]);
    }

}
