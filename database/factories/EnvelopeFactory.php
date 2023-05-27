<?php

namespace Flyzard\Maileditor\Database\Factories;

use Flyzard\Maileditor\Models\Envelope;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Flyzard\Maileditor\Models\Envelope>
 */
class EnvelopeFactory extends Factory
{

    protected $model = Envelope::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'identifier' => $this->faker->sentence,
            'subject' => $this->faker->sentence,
            'from' => [
                'address' => $this->faker->email,
                'name' => $this->faker->name,
            ],
            'to' => [
                [
                    'address' => $this->faker->email,
                    'name' => $this->faker->name,
                ],
            ],
            'cc' => [
                [
                    'address' => $this->faker->email,
                    'name' => $this->faker->name,
                ],
            ],
            'bcc' => [
                [
                    'address' => $this->faker->email,
                    'name' => $this->faker->name,
                ],
            ],
            'reply_to' => [
                'address' => $this->faker->email,
                'name' => $this->faker->name,
            ],
        ];
    }
}
