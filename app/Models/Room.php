<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function roomtype()
    {
        return $this->belongsTo(Roomtype::class);
    }

    public function getRoomNameAttribute()
    {
        return $this->roomtype()->first()->name . ' ' . $this->room_number;
    }
}
