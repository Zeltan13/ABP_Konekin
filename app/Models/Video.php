<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    protected $fillable = [
        'idKreator',
        'videoTitle',
        'videoDescription',
        'videoDuration',
        'videoPrice',
        'video',
        'videoThumbnail',
        'category',
    ];

    // Define relationships
    public function kreator()
    {
        return $this->belongsTo(Kreator::class, 'idKreator');
    }

    public function transactions()
    {
        return $this->hasMany(Transaksi::class, 'videoTitle', 'videoTitle');
    }
}
