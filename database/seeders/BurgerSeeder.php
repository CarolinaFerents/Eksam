<?php

namespace Database\Seeders;

use App\Models\Burger;
use Illuminate\Database\Seeder;

class BurgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Burger::factory(15)->create();

    }
}
