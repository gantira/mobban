<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'order',
        'visible',
        'color',
    ];

    public function botsf()
    {
        return $this->hasMany(BotSf::class, 'kategori', 'name');
    }

    public function scopeOrder($query)
    {
        return $query->orderBy('order');
    }

    public function scopeVisible($query)
    {
        return $query->whereVisible(true);
    }
}
