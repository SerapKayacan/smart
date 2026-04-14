<?php

namespace Database\Seeders;

use App\Models\TabPanel;
use Illuminate\Database\Seeder;

class TabPanelSeeder extends Seeder
{
    public function run(): void
    {
        TabPanel::create([
            'title'      => 'Güvenlik Hizmetleri',
            'sort_order' => 1,
            'is_active'  => true,
        ]);

        TabPanel::create([
            'title'      => 'Temizlik Hizmetleri',
            'sort_order' => 2,
            'is_active'  => true,
        ]);
    }
}
