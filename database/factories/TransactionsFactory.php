<?php

namespace Database\Factories;

use App\Models\Transactions;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transactions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'amount'=>$this->faker->numberBetween(1),
            'reason'=>$this->faker->text(),
            // 'user_id'=>User::factory(1)->create()->first()
        ];
    }
}
