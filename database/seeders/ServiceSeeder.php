<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // --- Güvenlik Hizmetleri Category ---
        $security = ServiceCategory::firstOrCreate(
            ['slug' => 'guvenlik-hizmetleri'],
            [
                'title'               => 'Güvenlik Hizmetleri',
                'meta_description'    => 'Smart Grup profesyonel özel güvenlik hizmetleri.',
                'home_page_detail'    => 'Sertifikalı güvenlik personelimizle 7/24 kesintisiz koruma sağlıyoruz.',
                'category_page_detail'=> 'Güvenlik ihtiyaçlarınıza özel çözümler sunuyoruz.',
                'icon'                => '<i class="fa fa-shield-alt"></i>',
                'type'                => 'home_office',
                'sort_order'          => 1,
                'is_show_home_page'   => true,
                'is_show_service_page'=> true,
                'home_page_colspan'   => 1,
                'is_active'           => true,
            ]
        );

        $securityServices = [
            [
                'title'               => 'Site Özel Güvenlik Hizmetleri',
                'category_page_detail'=> 'Konut siteleri ve rezidanslarda profesyonel güvenlik personeli ile 7/24 koruma hizmeti sunuyoruz.',
                'sort_detail'         => 'Sitenizin güvenliğini uzman ekibimize bırakın.',
                'sort_order'          => 1,
            ],
            [
                'title'               => 'AVM Güvenliği',
                'category_page_detail'=> 'Alışveriş merkezlerinde kalabalık yönetimi, kamera sistemi takibi ve acil müdahale hizmetleri sağlıyoruz.',
                'sort_detail'         => 'AVM güvenliğinde uzman kadromuzla yanınızdayız.',
                'sort_order'          => 2,
            ],
            [
                'title'               => 'Fabrika Güvenliği',
                'category_page_detail'=> 'Üretim tesislerinde vardiyalı güvenlik, araç giriş-çıkış kontrolü ve personel güvenliği hizmetleri sunuyoruz.',
                'sort_detail'         => 'Fabrikanızı güvende tutmak için buradayız.',
                'sort_order'          => 3,
            ],
            [
                'title'               => 'Şantiye Güvenliği',
                'category_page_detail'=> 'İnşaat şantiyelerinde malzeme koruma, personel takibi ve gece nöbet hizmetleri sağlıyoruz.',
                'sort_detail'         => 'Şantiyenizin güvenliğini profesyonel ekibimize emanet edin.',
                'sort_order'          => 4,
            ],
            [
                'title'               => 'Eğitim Kurumları ve Okul Güvenliği',
                'category_page_detail'=> 'Öğrenci ve personel güvenliği, okul giriş-çıkış kontrolü ve veli karşılama protokolleri uyguluyoruz.',
                'sort_detail'         => 'Eğitim kurumlarında güvenli bir ortam için yanınızdayız.',
                'sort_order'          => 5,
            ],
            [
                'title'               => 'Otel ve Turistik İşletme Güvenliği',
                'category_page_detail'=> 'Otel ve turistik tesislerde misafir güvenliği, otopark yönetimi ve 7/24 nöbet hizmetleri sunuyoruz.',
                'sort_detail'         => 'Misafirlerinizin güvenliği bizim önceliğimizdir.',
                'sort_order'          => 6,
            ],
        ];

        foreach ($securityServices as $data) {
            $slug = \Illuminate\Support\Str::slug($data['title']);
            Service::firstOrCreate(
                ['slug' => $slug],
                array_merge($data, [
                    'slug'               => $slug,
                    'meta_description'   => $data['category_page_detail'],
                    'detail'             => '',
                    'category_id'        => $security->id,
                    'can_be_appointment' => false,
                    'is_active'          => true,
                ])
            );
        }

        // --- Temizlik Hizmetleri Category ---
        $cleaning = ServiceCategory::firstOrCreate(
            ['slug' => 'temizlik-hizmetleri'],
            [
                'title'               => 'Temizlik Hizmetleri',
                'meta_description'    => 'Smart Grup profesyonel temizlik hizmetleri.',
                'home_page_detail'    => 'Çevre dostu ürünler ve uzman ekibimizle hijyenik ortamlar oluşturuyoruz.',
                'category_page_detail'=> 'Temizlik ihtiyaçlarınıza özel çözümler sunuyoruz.',
                'icon'                => '<i class="fa fa-broom"></i>',
                'type'                => 'home_office',
                'sort_order'          => 2,
                'is_show_home_page'   => true,
                'is_show_service_page'=> true,
                'home_page_colspan'   => 1,
                'is_active'           => true,
            ]
        );

        $cleaningServices = [
            [
                'title'               => 'AVM Temizlik Hizmetleri',
                'category_page_detail'=> 'Alışveriş merkezlerinde günlük, haftalık ve periyodik temizlik hizmetleri sunuyoruz.',
                'sort_detail'         => 'AVM temizliğinde profesyonel çözümler.',
                'sort_order'          => 1,
            ],
            [
                'title'               => 'Kat Hizmetleri (Housekeeping)',
                'category_page_detail'=> 'Otel ve konaklama tesislerinde oda temizliği, çarşaf değişimi ve genel düzenleme hizmetleri sağlıyoruz.',
                'sort_detail'         => 'Misafirlerinize en iyi konaklamayı sunun.',
                'sort_order'          => 2,
            ],
            [
                'title'               => 'Steward Hizmetleri',
                'category_page_detail'=> 'Mutfak ve servis alanlarında steward hizmetleri ile hijyen standartlarını koruyoruz.',
                'sort_detail'         => 'Mutfağınızda hijyen ve düzen bizim işimiz.',
                'sort_order'          => 3,
            ],
            [
                'title'               => 'Garson/Servis Personeli',
                'category_page_detail'=> 'Profesyonel garson ve servis personeli ile misafirlerinize kaliteli hizmet sunuyoruz.',
                'sort_detail'         => 'Servis kalitenizi artırın.',
                'sort_order'          => 4,
            ],
            [
                'title'               => 'Bulaşıkhane Hizmetleri',
                'category_page_detail'=> 'Restoran ve otel mutfaklarında bulaşıkhane operasyonlarını hijyen standartlarına uygun yürütüyoruz.',
                'sort_detail'         => 'Mutfak operasyonlarınızı güvenle yönetiyoruz.',
                'sort_order'          => 5,
            ],
            [
                'title'               => 'Otel Temizlik & Operasyon Hizmetleri',
                'category_page_detail'=> 'Otel genelinde kapsamlı temizlik ve operasyon hizmetleri ile misafir memnuniyetini en üst düzeyde tutuyoruz.',
                'sort_detail'         => 'Otelinizin tüm temizlik operasyonlarını üstleniyoruz.',
                'sort_order'          => 6,
            ],
        ];

        foreach ($cleaningServices as $data) {
            $slug = \Illuminate\Support\Str::slug($data['title']);
            Service::firstOrCreate(
                ['slug' => $slug],
                array_merge($data, [
                    'slug'               => $slug,
                    'meta_description'   => $data['category_page_detail'],
                    'detail'             => '',
                    'category_id'        => $cleaning->id,
                    'can_be_appointment' => false,
                    'is_active'          => true,
                ])
            );
        }
    }
}
