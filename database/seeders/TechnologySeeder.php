<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologyDatas = [
            "Laravel",
            "VueJS",
            "PHP",
            "React",
            "Javascript",
            "SQL",
        ];

        foreach ($technologyDatas as $elem) {
            $newTechnology = new Technology();
            $newTechnology->name_technology = $elem;
            $newTechnology->save();
        }
    }
}
