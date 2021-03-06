<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotTeknisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'datel',
        'sto',
        'track_id',
        'info_progress',
        'date',
        'kategori',
        'evidence_photo',
        'evidence_location',
        'user_name_telegram',
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

    public function getEvidencePhotoShowAttribute()
    {
        return env('DOMAIN_EVIDENCE_PHOTO') . $this->evidence_photo;
    }

    public function getEvidenceLocationShowAttribute()
    {
        $loc = explode('=', $this->evidence_location)[1];

        return "<a href='{$this->evidence_location}' target='_blank'><i class='icon-xl la la-map-marked-alt'></i>{$loc}</a>";
    }
}
