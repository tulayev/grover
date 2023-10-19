<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert(
            [
                [
                    'key' => 'map',
                    'value' => null,
                    'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6002.513750409236!2d69.23761184257856!3d41.216172295349395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae60fcf2af0dcd%3A0x72d45eb7de954541!2z0JzQsNGB0YHQuNCyINCh0LXRgNCz0LXQu9C4LCDQmtCy0LDRgNGC0LDQuyA0!5e0!3m2!1sru!2s!4v1697472759031!5m2!1sru!2s',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'city',
                    'value' => json_encode(['en' => 'Tashkent']),
                    'url' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'address',
                    'value' => json_encode(['en' => '48, Sergeli-4, Tashkent']),
                    'url' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'phone',
                    'value' => null,
                    'url' => '+998 90 900-49-38',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'email',
                    'value' => null,
                    'url' => 'grover.tashkent@info.uz',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'city',
                    'value' => json_encode(['en' => 'Andijan']),
                    'url' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'address',
                    'value' => json_encode(['en' => '3, A.Temur street, Andijan']),
                    'url' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'phone',
                    'value' => null,
                    'url' => '+998 71 210-45-15',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'key' => 'email',
                    'value' => null,
                    'url' => 'grover.andijan@info.uz',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
