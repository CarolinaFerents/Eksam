<?php

namespace Database\Factories;

use App\Models\Burger;
use Illuminate\Database\Eloquent\Factories\Factory;

class BurgerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Burger::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'price' => $this->faker->numberBetween($min = 4, $max = 25),
            'description' => $this->faker->sentences(3,true),
            'additional' => $this->faker->sentences(3,true),
            'spicy' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
