<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photos')->insert(
            [
                [
                    'project_id' => 1,
                    'image' => 'eco_sergeli_1.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'project_id' => 1,
                    'image' => 'eco_sergeli_2.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'project_id' => 1,
                    'image' => 'eco_sergeli_3.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'project_id' => 1,
                    'image' => 'eco_sergeli_4.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'project_id' => 1,
                    'image' => 'eco_sergeli_5.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'project_id' => 1,
                    'image' => 'eco_sergeli_6.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
