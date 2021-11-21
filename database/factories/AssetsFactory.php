<?php

namespace Database\Factories;

use App\Models\Assets;
use App\Models\Categories;
use App\Models\Locations;
use App\Models\Sites;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assets::class;

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
        'status'=>$this->faker->numberBetween(0, 1),
        'block_number'=>$this->faker->buildingNumber(),
        'description'=>$this->faker->text(),
        'image'=>$this->faker->image(),
        // 'location_id'=>Locations::factory(1, true)->create()->first()->id,
        // 'category_id'=>Categories::factory(1)->create()->first()->id,
        // 'site_id'=>Sites::factory(1)->create()->first()->id
        ];
    }
}
