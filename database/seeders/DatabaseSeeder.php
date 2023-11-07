<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use MoonShine\Models\MoonshineUser;
use MoonShine\Models\MoonshineUserRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MoonshineUser::query()->create([
            'name' => 'Admin',
            'moonshine_user_role_id' => MoonshineUserRole::DEFAULT_ROLE_ID,
            'email' => 'admin@grover.com',
            'password' => bcrypt('123')
        ]);

        $this->call([
            SettingsSeeder::class,
            TestimonialSeeder::class,
            VacationSeeder::class,
            ProjectSeeder::class,
            MemberSeeder::class,
            PhotoSeeder::class,
        ]);
    }
}
