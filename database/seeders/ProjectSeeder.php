<?php

namespace Database\Seeders;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert(
            [
                [
                    'title' => 'Eco Sergeli',
                    'slug' => Str::slug('Eco Sergeli'),
                    'description' => json_encode(['en' => fake()->text(100)]),
                    'finished_at' => fake()->date(),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Eco Capital Stroy',
                    'slug' => Str::slug('Eco Capital Stroy'),
                    'description' => json_encode(['en' => fake()->text(100)]),
                    'finished_at' => fake()->date(),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Dara Elite',
                    'slug' => Str::slug('Dara Elite'),
                    'description' => json_encode(['en' => fake()->text(100)]),
                    'finished_at' => fake()->date(),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Muhtasham',
                    'slug' => Str::slug('Muhtasham'),
                    'description' => json_encode(['en' => fake()->text(100)]),
                    'finished_at' => fake()->date(),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
