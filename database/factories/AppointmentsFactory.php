<?php

namespace Database\Factories;

use App\Models\Appointments;
use App\Models\Sites;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'set_time'=>$this->faker->dateTime(),
            'fee'=>$this->faker->numberBetween(10, 30),
            'status'=>$this->faker->numberBetween(0, 1),
            'email'=>$this->faker->email(),
            'client_name'=>$this->faker->name(),
            'site_id'=>Sites::factory(1)->create()->first()
        ];
    }
}
