<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'block_number', 'description', 'location_id', 'category_id', 'site_id'];

    public function location(){
        return $this->hasOne(Locations::class, 'location_id', 'id');
    }
    public function site()
    {
        return $this->hasOne(Sites::class, 'site_id', 'id');
    }
    public function category()
    {
        return $this->hasOne(Categories::class, 'category_id', 'id');
    }
    public function testimonies()
    {
        return $this->hasOne(Testimonies::class, 'testimony_id', 'id');
    }
}
