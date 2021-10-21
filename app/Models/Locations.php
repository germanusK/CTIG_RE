<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Locations extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'latitude', 'longitude'];

    public function assets()
    {
        return $this->HasMany(AssetsController::class);
    }
    public function sites()
    {
        return $this->hasMany(SitesController::class);
    }
}
