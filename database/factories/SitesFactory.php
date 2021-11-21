<?php

namespace Database\Factories;

use App\Models\Locations;
use App\Models\Sites;
use Illuminate\Database\Eloquent\Factories\Factory;

class SitesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sites::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name(),
            'site_number'=>$this->faker->buildingNumber(),
            // 'location_id'=>Locations::inRandomOrder()->first()->id,
            // 'location_id'=>Locations::factory(2)->create()[0]->first()->id,
            'site_map'=>$this->faker->image
        ];
    }
}
