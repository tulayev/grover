<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vacations')->insert(
        [
            [
                'title' => json_encode(['en' => 'Assistant Manager']),
                'location' => json_encode(['en' => 'Tashkent']),
                'description' => json_encode(['en' => '<p>Working conditions</p><ul style="list-style-type:disc;"><li style="list-style-type:disc;">Full-time position with flexible working hours;</li><li style="list-style-type:disc;">Competitive salary commensurate with experience;</li><li style="list-style-type:disc;">Generous vacation and sick leave policy;</li><li style="list-style-type:disc;">Collaborative team-oriented work environment.</li></ul><p>Requirements for candidates</p><ul style="list-style-type:disc;"><li style="list-style-type:disc;">Law degree from an accredited institution;</li><li style="list-style-type:disc;">2+ years of experience in litigation, corporate law or a related field;</li><li style="list-style-type:disc;">Excellent communication and analytical skills;</li><li style="list-style-type:disc;">Ability to manage multiple priorities and deadlines.</li></ul><p>Salary</p><ul style="list-style-type:disc;"><li style="list-style-type:disc;"><span style="color:hsl(0, 75%, 60%);">1,200$</span> for firth 3 month, after it decreases <span style="color:hsl(0, 75%, 60%);">+10%</span> every 3 month for <span style="color:hsl(0, 75%, 60%);">2 years</span>.</li></ul>']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => json_encode(['en' => 'UI/UX designer']),
                'location' => json_encode(['en' => 'Remote']),
                'description' => json_encode(['en' => '<p>Working conditions</p><ul style="list-style-type:disc;"><li style="list-style-type:disc;">Full-time position with flexible working hours;</li><li style="list-style-type:disc;">Competitive salary commensurate with experience;</li><li style="list-style-type:disc;">Generous vacation and sick leave policy;</li><li style="list-style-type:disc;">Collaborative team-oriented work environment.</li></ul><p>Requirements for candidates</p><ul style="list-style-type:disc;"><li style="list-style-type:disc;">Law degree from an accredited institution;</li><li style="list-style-type:disc;">2+ years of experience in litigation, corporate law or a related field;</li><li style="list-style-type:disc;">Excellent communication and analytical skills;</li><li style="list-style-type:disc;">Ability to manage multiple priorities and deadlines.</li></ul><p>Salary</p><ul style="list-style-type:disc;"><li style="list-style-type:disc;"><span style="color:hsl(0, 75%, 60%);">1,200$</span> for firth 3 month, after it decreases <span style="color:hsl(0, 75%, 60%);">+10%</span> every 3 month for <span style="color:hsl(0, 75%, 60%);">2 years</span>.</li></ul>']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
