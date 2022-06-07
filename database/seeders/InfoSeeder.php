<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryInfo;
use App\Models\Info;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		CategoryInfo::factory(5)->create();
		Info::factory(50)->create();
    }
}
