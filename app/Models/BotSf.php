<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotSf extends Model
{
    use HasFactory;

    protected $fillable = [
        'sf_chat_id',
        'sto',
        'datel',
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
        'crew',
        'ncx_id',
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori', 'name');
    }
}
