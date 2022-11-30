<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'image', 
        'description'
    ];

    // RelationShip
    public function games() {
        return $this->hasMany('App\Models\Game');
    }

    // Scopes
    public function scopeNames($cats, $q) {
        if (trim($q)) {
            $cats->where('name', 'LIKE', "%$q%");
        }
    }
    
}
