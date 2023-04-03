<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable = [
        'user_id',
        'gedung_id',
        'ruangan_id',
        'book_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function building()
    {
        return $this->belongsTo(Building::class, 'gedung_id', 'gedung_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'ruangan_id', 'ruangan_id');
    }

}
