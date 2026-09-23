<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    public function run(): void
    {

        Category::insert([

            [
                'name'=>'Investasi',
                'icon'=>'building',
                'color'=>'blue'
            ],

            [
                'name'=>'Rapat',
                'icon'=>'document',
                'color'=>'gray'
            ],

            [
                'name'=>'Kunjungan',
                'icon'=>'car',
                'color'=>'green'
            ],

            [
                'name'=>'Sosialisasi',
                'icon'=>'megaphone',
                'color'=>'yellow'
            ],

            [
                'name'=>'Launching',
                'icon'=>'rocket',
                'color'=>'red'
            ]

        ]);

    }
}