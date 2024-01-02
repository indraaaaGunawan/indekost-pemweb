<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    protected $fillable = ['name', 'description', 'price', 'facilities'];

    // Relasi One-to-Many dengan Room
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
