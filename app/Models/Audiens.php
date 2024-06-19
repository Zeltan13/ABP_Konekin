<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audiens extends Model
{
    use HasFactory;

    protected $table = 'audiens';

    protected $fillable = [
        'username',
        'noHP',
        'email',
        'profilePict'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'idAudiens');
    }
}
