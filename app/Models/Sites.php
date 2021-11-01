<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'site_number', 'site_map', 'location_id'=>1];

    public function assets()
    {
        return $this->hasMany(AssetsController::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointments::class);
    }
}

?>