<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function links()
    {
        return $this->belongsToMany(link::class, '_link_tag');
    }
}
