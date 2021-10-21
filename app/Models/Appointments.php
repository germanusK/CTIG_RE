<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = ['set_date', 'set_time', 'fee', 'email', 'client_name', 'site_id'];

    public function site(){
        $this->belongsTo(Sites::class ,'site_id');
    }
}
