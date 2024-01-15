<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('db.projects');
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->image = $project['image'];
            $newProject->title = $project['title'];
            $newProject->body = $project['body'];
            $newProject->url = $project['url'];
            $newProject->identify = $project['identify'];
            $newProject->user_id = 1;
            $newProject->slug = Str::slug($project['title'] . '-' . $newProject->id, '-');
            $newProject->save();
        }
    }
}
