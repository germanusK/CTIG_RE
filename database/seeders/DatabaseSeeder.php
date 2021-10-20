<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
        [
        \Database\Seeders\AboutSeeder::class,
        \Database\Seeders\AppointmentsSeeder::class,
        \Database\Seeders\AssetsSeeder::class,
        \Database\Seeders\CategoriesSeeder::class,
        \Database\Seeders\ContactsSeeder::class,
        \Database\Seeders\ProfilesSeeder::class,
        \Database\Seeders\RolesSeeder::class,
        \Database\Seeders\SitesSeeder::class,
        \Database\Seeders\TestimoniesSeeder::class,
        \Database\Seeders\TransactionsSeeder::class,
        \Database\Seeders\RolePermissionSeeder::class,
        \Database\Seeders\PermissionsSeeder::class,
        \Database\Seeders\UserSeeder::class]
        );
    }
}
