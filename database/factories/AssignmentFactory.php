<?php

namespace Database\Factories;

use App\Models\Assignment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assignment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blok' => $this->faker->numberBetween(1,4),
            'cursus' => $this->faker->word,
            'toets' => $this->faker->word,
            'weging' => $this->faker->numberBetween(0,100),
            'ec' => $this->faker->numberBetween(0,20),
            'cijfer' => $this->faker->numberBetween(1,10)
        ];
    }
}
