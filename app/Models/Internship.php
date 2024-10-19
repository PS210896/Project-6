<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'course',
        'image_url',
        'learning_path',
        'location',
        'from',
        'spaces_left',
        'compensation'];


    // Optionally, specify hidden attributes (e.g., for password protection)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Optionally, specify the attributes that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
