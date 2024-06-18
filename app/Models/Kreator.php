<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kreator extends Model
{
    use HasFactory;

    protected $table = 'kreators';

    protected $fillable = [
        'username',
        'noHP',
        'email',
        'cv',
        'bio',
        'socMed',
        'rekening',
        'profilePict',
    ];
    
    // Define relationships
    public function videos()
    {
        return $this->hasMany(Video::class, 'idKreator');
    }

    public function transactions()
    {
        return $this->hasMany(Transaksi::class, 'idKreator');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'name');
    }
}
