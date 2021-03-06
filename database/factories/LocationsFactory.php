<?php

namespace Database\Factories;

use App\Models\Locations;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Locations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->streetName(),
            'description'=>$this->faker->text(),
            'latitude'=>$this->faker->latitude(),
            'longitude'=>$this->faker->longitude()
        ];
    }
}
