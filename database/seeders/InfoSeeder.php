<?php

namespace Database\Seeders;

use App\Models\CategoryInfo;
use App\Models\Info;
use Illuminate\Database\Seeder;

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
