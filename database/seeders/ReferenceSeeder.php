<?php

namespace Database\Seeders;

use App\Models\Reference;
use Illuminate\Database\Seeder;

class ReferenceSeeder extends Seeder
{
    public function run(): void
    {
        $references = [
            // --- Güvenlik ---
            ['name' => 'Rize Şehir Hastanesi',                                     'category' => 'security', 'location' => 'Rize'],
            ['name' => 'Ataşehir Modern',                                           'category' => 'security', 'location' => 'Ataşehir, İstanbul'],
            ['name' => 'İbni Haldun Üniversitesi Kampüs İnşaatı',                  'category' => 'security', 'location' => 'Başakşehir, İstanbul'],
            ['name' => 'Göktürk Kemer Villaları',                                   'category' => 'security', 'location' => 'Göktürk, İstanbul'],
            ['name' => 'Sakarya Şehir Hastanesi',                                   'category' => 'security', 'location' => 'Sakarya'],
            ['name' => 'Stüdyo24',                                                  'category' => 'security', 'location' => 'İstanbul'],
            ['name' => 'Mimarsinan Evleri',                                         'category' => 'security', 'location' => 'İstanbul'],
            ['name' => 'Bizim Mahalle 1. Etap',                                     'category' => 'security', 'location' => 'Halkalı, İstanbul'],
            ['name' => 'Çınarköy Evleri',                                           'category' => 'security', 'location' => 'Çekmeköy, İstanbul'],
            ['name' => 'Valentium',                                                  'category' => 'security', 'location' => 'Ispartakule, İstanbul'],
            ['name' => 'Bağcılar Express',                                          'category' => 'security', 'location' => 'Bağcılar, İstanbul'],
            ['name' => 'Kartal Nexus',                                              'category' => 'security', 'location' => 'Kartal, İstanbul'],
            ['name' => 'Gaziosmanpaşa 7/A',                                         'category' => 'security', 'location' => 'Gaziosmanpaşa, İstanbul'],
            ['name' => 'Şehri Bağcılar',                                            'category' => 'security', 'location' => 'Bağcılar, İstanbul'],
            ['name' => 'Erzurum Soğuk Çermik',                                      'category' => 'security', 'location' => 'Erzurum'],
            ['name' => 'Yeni Çamlıca Konutları',                                    'category' => 'security', 'location' => 'İstanbul'],
            ['name' => 'Fatih Sanayi Sitesi',                                       'category' => 'security', 'location' => 'Fatih, İstanbul'],
            ['name' => 'Egemen İnşaat - Hatay/İstanbul Deprem Konutları',           'category' => 'security', 'location' => 'Hatay / İstanbul'],
            ['name' => 'Emlak Konut Fikirtepe Kentsel Dönüşüm Projeleri',           'category' => 'security', 'location' => 'Fikirtepe, İstanbul'],
            ['name' => 'Torkam İnşaat',                                             'category' => 'security', 'location' => 'İstanbul'],
            ['name' => 'Gold İnşaat - Sazlıbosna Kentsel Dönüşüm Projeleri',       'category' => 'security', 'location' => 'Sazlıbosna, İstanbul'],
            ['name' => 'Tozkaparan Toplu Konutları',                                'category' => 'security', 'location' => 'İstanbul'],
            ['name' => 'Eskişehir Millet Bahçesi',                                  'category' => 'security', 'location' => 'Eskişehir'],
            ['name' => 'Çorlu Millet Bahçesi',                                      'category' => 'security', 'location' => 'Çorlu, Tekirdağ'],
            ['name' => 'Diyarbakır Sur Çarşısı',                                    'category' => 'security', 'location' => 'Diyarbakır'],
            ['name' => 'Salda Gölü',                                                'category' => 'security', 'location' => 'Burdur'],

            // --- Temizlik (2 sample) ---
            ['name' => 'Rize Şehir Hastanesi Temizlik Hizmetleri',                 'category' => 'cleaning', 'location' => 'Rize'],
            ['name' => 'Sakarya Şehir Hastanesi Temizlik Hizmetleri',              'category' => 'cleaning', 'location' => 'Sakarya'],
        ];

        foreach ($references as $i => $data) {
            Reference::firstOrCreate(
                ['name' => $data['name'], 'category' => $data['category']],
                [
                    'location'   => $data['location'],
                    'description'=> null,
                    'sort_order' => $i + 1,
                    'is_active'  => true,
                ]
            );
        }
    }
}
