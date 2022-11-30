<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'user_id', 
        'category_id',
        'slider',
        'price'
    ];

    // RelationShips
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    // Scope
    public function scopeNames($games, $q)
    {
        if (trim($q)) {
            $games->where('name', 'LIKE', "%$q%")
            ->orWhere('description', 'LIKE', "%$q%");
        }
    }
}
