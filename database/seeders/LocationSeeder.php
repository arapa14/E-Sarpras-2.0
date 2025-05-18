<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            // Data Dummy
            [
                'name' => 'Dalam Ruangan'
            ],
            [
                'name' => 'Luar Ruangan'
            ],
            [
                'name' => 'Ruang Bengkel'
            ],
            [
                'name' => 'Toilet'
            ],
            [
                'name' => 'Ruang Theater'
            ],
            [
                'name' => 'Ruang Serba Guna'
            ],
            [
                'name' => 'Aula Atas Lantai 2'
            ],
            [
                'name' => 'Ruang TU'
            ],
            [
                'name' => 'Ruang LSP'
            ],
        ];

        foreach ($locations as $location) {
            DB::table('locations')->insert($location);
        }
    }
}
