<?php

namespace Nerdmonkey\RelaySwitch\Database\Factories;

use Nerdmonkey\RelaySwitch\Models\Relay;
use Illuminate\Database\Eloquent\Factories\Factory;

class RelayFactory extends Factory
{
    protected $model = Relay::class;

    public function definition()
    {
        return [
            'name' => $this->faker->colorName,
            'pin' => $this->faker->numberBetween(1, 5),
            'state' => $this->faker->randomElements(['off', 'on', 'blinking']),
        ];
    }
}
