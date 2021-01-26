<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10, true),
            'label' => $this->faker->word,
            'description' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(330, 230),
        ];
    }
}
