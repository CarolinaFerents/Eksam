<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Burger::all()->each(function ($burger){
            Image::factory()->create(['burger_id' => $burger->id]);
        });
    }
}
