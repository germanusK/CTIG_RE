<?php

namespace Database\Factories;

use App\Models\Profiles;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfilesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profiles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'photo'=>$this->faker->image(),
            'story'=>$this->faker->text(),
            // 'user_id'=>User::factory(1)->create()->first()
        ];
    }
}
