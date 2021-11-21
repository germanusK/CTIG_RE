<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimoniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Testimonies::factory(10)->create();
    }
}
