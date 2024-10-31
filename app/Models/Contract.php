<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'course',
        'learning_path',
        'location',
        'from',
        'spaces_left',
        'compensation',
    ];
    
}
