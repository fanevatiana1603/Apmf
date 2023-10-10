<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poste;

class Direction extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_direction',
    ];

    public function postes()
    {
        return $this->belongsToMany(\App\Models\Poste::class);
    }
}
