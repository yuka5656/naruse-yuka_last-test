<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'tell' => $this->faker->randomNumber(9,10),
            'address' => $this->faker->city,
            'detail' => $this->faker->sentence,
        ];
    }
}
