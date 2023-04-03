<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $table = 'building';
    protected $fillable = [
        'gedung_id',
        'nama_gedung',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
