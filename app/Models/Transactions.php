<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'reason', 'user_id'];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
