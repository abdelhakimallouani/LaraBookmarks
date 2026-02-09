<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    protected $fillable = [
        'titre',
        'url',
        'categorie_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
