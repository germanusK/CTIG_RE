<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonies extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'asset_id', 'user_id'];

    public function asset()
    {
        return $this->hasOne(Assets::class, 'asset_id', 'id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
