<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = ['permission_index', 'description'];

    public function role_permission()
    {
        return $this->hasMany(RolePermission::class);
    }
}
