<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'budget',
        'start_date',
        'duration',
        'num_employees'
    ];

    protected $casts = [
        'budget' => 'int'
    ];

}
