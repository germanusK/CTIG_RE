<?php

namespace Database\Factories;

use App\Models\Assets;
use App\Models\Testimonies;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimoniesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'message'=>$this->faker->text(),
            // 'asset_id'=>Assets::factory(1)->create()->first(),
            // 'user_id'=>User::factory(1)->create()->first()
        ];
    }
}
