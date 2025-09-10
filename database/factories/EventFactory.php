<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
