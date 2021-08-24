<?php

namespace Database\Factories;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertisementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->paragraph(1),
            'text'=>$this->faker->paragraph(7),
            'status'=>$this->faker->boolean(),
            'url'=>$this->faker->imageUrl()
        ];
    }
}
