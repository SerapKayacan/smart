<?php

namespace Database\Seeders;

use App\Models\TabPanel;
use Illuminate\Database\Seeder;

class TabPanelSeeder extends Seeder
{
    public function run(): void
    {
        TabPanel::create([
            'nav_button_text' => 'Güvenlik Hizmetleri',
            'title'           => '11 Yıllık Güvenlik Hizmetleri Deneyimi',
            'description'     => 'Profesyonel güvenlik personelimizle işyerinizi, sitenizi ve tesislerinizi 7/24 koruma altına alıyoruz.',
            'bullet_1'        => 'Sertifikalı Güvenlik Personeli',
            'bullet_2'        => '7/24 Kesintisiz Hizmet',
            'bullet_3'        => 'Modern Güvenlik Sistemleri',
            'button_text'     => 'Devamını Oku',
            'button_link'     => '/hizmetler/guvenlik-hizmetleri',
            'sort_order'      => 1,
            'is_active'       => true,
        ]);

        TabPanel::create([
            'nav_button_text' => 'Temizlik Hizmetleri',
            'title'           => 'Profesyonel Temizlik Hizmetleri',
            'description'     => 'Endüstriyel ve kurumsal temizlik hizmetlerimizle çalışma ortamınızı hijyenik ve düzenli tutuyoruz.',
            'bullet_1'        => 'Hijyenik Temizlik',
            'bullet_2'        => 'Uzman Temizlik Ekibi',
            'bullet_3'        => 'Çevre Dostu Ürünler',
            'button_text'     => 'Devamını Oku',
            'button_link'     => '/hizmetler/temizlik-hizmetleri',
            'sort_order'      => 2,
            'is_active'       => true,
        ]);
    }
}
