<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auidens extends Model
{
    use HasFactory;

    protected $table = 'audiens';

    protected $fillable = [
        'username',
        'noHP',
        'email', 
        'profilePict',
    ];
}
