<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'url' => "https://www.plein.com/on/demandware.static/-/Sites-plein-master-catalog/default/dwcdaed7cf/images/large/UABS-MSC3761-PLE075N_01_s34f.jpg",
        ];
    }
}
