<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $typeArray = config('projects.typeDatas');

        $typeDatas = [
            "FrontEnd",
            "Backend",
            "FullStack",
            "Design",
        ];

        foreach ($typeDatas as $elem) {
            $newType = new Type();
            $newType->name_type = $elem;
            $newType->save();
        }
        
    }
}
