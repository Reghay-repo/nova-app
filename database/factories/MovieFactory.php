<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'poster' => $this->faker->name(),
            'imdb_id' => $this->faker->sentence(4),
            'review' => $this->faker->text(5),
            'user_id' => 1,
        
        ];
    }
}
