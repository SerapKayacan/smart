<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $security = ServiceCategory::firstOrCreate(
            ['slug' => 'guvenlik-hizmetleri'],
            [
                'title'       => 'Güvenlik Hizmetleri',
                'description' => 'Güvenlik ihtiyaçlarınıza özel çözümler sunuyoruz.',
                'sort_order'  => 1,
                'is_active'   => true,
            ]
        );

        $securityServices = [
            ['title' => 'Site Özel Güvenlik Hizmetleri',       'description' => 'Konut siteleri ve rezidanslarda profesyonel güvenlik personeli ile 7/24 koruma hizmeti sunuyoruz.',         'sort_order' => 1],
            ['title' => 'AVM Güvenliği',                        'description' => 'Alışveriş merkezlerinde kalabalık yönetimi, kamera sistemi takibi ve acil müdahale hizmetleri sağlıyoruz.', 'sort_order' => 2],
            ['title' => 'Fabrika Güvenliği',                    'description' => 'Üretim tesislerinde vardiyalı güvenlik, araç giriş-çıkış kontrolü ve personel güvenliği sunuyoruz.',        'sort_order' => 3],
            ['title' => 'Şantiye Güvenliği',                    'description' => 'İnşaat şantiyelerinde malzeme koruma, personel takibi ve gece nöbet hizmetleri sağlıyoruz.',               'sort_order' => 4],
            ['title' => 'Eğitim Kurumları ve Okul Güvenliği',   'description' => 'Öğrenci ve personel güvenliği, okul giriş-çıkış kontrolü ve veli karşılama protokolleri uyguluyoruz.',     'sort_order' => 5],
            ['title' => 'Otel ve Turistik İşletme Güvenliği',   'description' => 'Otel ve turistik tesislerde misafir güvenliği, otopark yönetimi ve 7/24 nöbet hizmetleri sunuyoruz.',      'sort_order' => 6],
        ];

        foreach ($securityServices as $data) {
            $slug = \Illuminate\Support\Str::slug($data['title']);
            Service::firstOrCreate(
                ['slug' => $slug],
                [
                    'title'               => $data['title'],
                    'slug'                => $slug,
                    'meta_description'    => $data['description'],
                    'category_page_detail'=> $data['description'],
                    'sort_detail'         => '',
                    'detail'              => '',
                    'category_id'         => $security->id,
                    'sort_order'          => $data['sort_order'],
                    'is_active'           => true,
                ]
            );
        }

        $cleaning = ServiceCategory::firstOrCreate(
            ['slug' => 'temizlik-hizmetleri'],
            [
                'title'       => 'Temizlik Hizmetleri',
                'description' => 'Temizlik ihtiyaçlarınıza özel çözümler sunuyoruz.',
                'sort_order'  => 2,
                'is_active'   => true,
            ]
        );

        $cleaningServices = [
            ['title' => 'AVM Temizlik Hizmetleri',              'description' => 'Alışveriş merkezlerinde günlük, haftalık ve periyodik temizlik hizmetleri sunuyoruz.',                      'sort_order' => 1],
            ['title' => 'Kat Hizmetleri (Housekeeping)',         'description' => 'Otel ve konaklama tesislerinde oda temizliği, çarşaf değişimi ve genel düzenleme hizmetleri sağlıyoruz.', 'sort_order' => 2],
            ['title' => 'Steward Hizmetleri',                   'description' => 'Mutfak ve servis alanlarında steward hizmetleri ile hijyen standartlarını koruyoruz.',                     'sort_order' => 3],
            ['title' => 'Garson/Servis Personeli',              'description' => 'Profesyonel garson ve servis personeli ile misafirlerinize kaliteli hizmet sunuyoruz.',                     'sort_order' => 4],
            ['title' => 'Bulaşıkhane Hizmetleri',               'description' => 'Restoran ve otel mutfaklarında bulaşıkhane operasyonlarını hijyen standartlarına uygun yürütüyoruz.',      'sort_order' => 5],
            ['title' => 'Otel Temizlik & Operasyon Hizmetleri', 'description' => 'Otel genelinde kapsamlı temizlik ve operasyon hizmetleri ile misafir memnuniyetini en üst düzeyde tutuyoruz.', 'sort_order' => 6],
        ];

        foreach ($cleaningServices as $data) {
            $slug = \Illuminate\Support\Str::slug($data['title']);
            Service::firstOrCreate(
                ['slug' => $slug],
                [
                    'title'               => $data['title'],
                    'slug'                => $slug,
                    'meta_description'    => $data['description'],
                    'category_page_detail'=> $data['description'],
                    'sort_detail'         => '',
                    'detail'              => '',
                    'category_id'         => $cleaning->id,
                    'sort_order'          => $data['sort_order'],
                    'is_active'           => true,
                ]
            );
        }
    }
}
