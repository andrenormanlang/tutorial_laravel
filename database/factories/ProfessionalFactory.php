<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Professional;

class ProfessionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Professional::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'skill' => $this->faker->jobTitle(),  // Generates random job titles
            'bio' => $this->faker->realText(500),  // Generates a brief bio with 10 words
        ];
    }
}

