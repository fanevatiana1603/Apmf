<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direction;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_poste',
        'id_direction',
        'nom_poste',
    ];

    public function directions()
    {
        return $this->belongsToMany(\App\Models\Direction::class);
    }
}
