<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'permissions'];
     
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function role_permissions()
    {
        return $this->hasMany(Role_permission::class);
    }
}
