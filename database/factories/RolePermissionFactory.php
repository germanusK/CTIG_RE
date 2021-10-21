<?php

namespace Database\Factories;

use App\Models\Permissions;
use App\Models\RolePermission;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolePermissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RolePermission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'role_id'=>Roles::factory(1)->create()->first(),
            'permission_id'=>Permissions::factory(1)->create()->first()
        ];
    }
}
