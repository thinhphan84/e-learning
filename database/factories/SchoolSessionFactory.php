<?php

namespace Database\Factories;

use App\Models\SchoolSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SchoolSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'session_name' => $this->faker->sentence,
        ];
    }
}
