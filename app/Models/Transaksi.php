<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'idKreator',
        'idAudiens',
        'videoTitle',
        'videoPrice',
        'tglTransaksi',
        'status',
    ];
    
    // Define relationships
    public function kreator()
    {
        return $this->belongsTo(Kreator::class, 'idKreator');
    }

    public function audiens()
    {
        return $this->belongsTo(Audiens::class, 'idAudiens');
    }

    public function video()
    {
        return $this->belongsTo(Video::class, 'videoTitle', 'videoTitle');
    }
}
