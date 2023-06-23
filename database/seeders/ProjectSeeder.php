<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str; // Import dello slug helpers

use App\Models\Admin\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataProjects = config('projects.projectsDatas');

        foreach ($dataProjects as $elem) {
            $newComic = new Project();
            $newComic->title_project = $elem['title_project'];
            $newComic->description_project = $elem['description_project'];
            $newComic->slug = Str::slug($newComic->title_project, '-');
            $newComic->project_image = $elem['project_image'];
            $newComic->client = $elem['client'];
            $newComic->save();
        }
    }
}
