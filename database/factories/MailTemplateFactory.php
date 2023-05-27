<?php

namespace Flyzard\Maileditor\Database\Factories;

use Flyzard\Maileditor\Models\MailTemplate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Flyzard\Maileditor\Models\MailTemplate>
 */
class MailTemplateFactory extends Factory
{
    protected $model = MailTemplate::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            'request' => [
                'name' => $this->faker->name,
                'email' => $this->faker->email,
            ],
            'envelope_id' => EnvelopeFactory::new(),
            'deleted_at' => null,
        ];
    }
}
