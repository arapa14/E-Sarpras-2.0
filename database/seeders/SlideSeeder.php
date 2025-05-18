<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            [
                'image_path' => 'storage/slider/e-sarpras-landing.png',
                'is_active' => true,
                'order' => 0
            ],
            [
                'image_path' => 'storage/slider/slide1.jpg',
                'is_active' => true,
                'order' => 1
            ],
            [
                'image_path' => 'storage/slider/slide2.jpg',
                'is_active' => true,
                'order' => 2
            ],
        ];  

        foreach ($slides as $slide) {
            DB::table('sliders')->insert($slide);
        }
    }
}
