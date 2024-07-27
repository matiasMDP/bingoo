<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'scheduled_time'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
