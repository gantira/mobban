<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotTeknisi extends Model
{
    use HasFactory;

    protected $table = 'bot_teknisi';

    protected $fillable = [
        'datel',
        'sto',
        'track_id',
        'info_progress',
        'date',
        'kategori',
        'evidence',
        'user_name_telegram',
    ];
}
