<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotSf extends Model
{
    use HasFactory;

    protected $table = 'bot_sf';

    protected $fillable = [
        'sto',
        'date',
        'nama',
        'track_id',
        'no_hp1',
        'no_hp2',
        'alamat',
        'odp',
        'kode_sales',
        'user_name_telegram',
        'user_name_telegram_teknisi',
        'info_progress',
        'kategori',
        'paket',
        'sc_id',
        'nd_internet',
        'nd_telp',
        'teknisi',
        'layanan',
        'wo_id',
    ];

    public function getKategoriLabelAttribute()
    {
        if ($this->kategori == 'LIVE') {
            $kategori = "<span class='badge badge-success'>{$this->kategori}</span>";
        } else {
            $kategori = $this->kategori;
        }
        return $kategori;
    }
}
