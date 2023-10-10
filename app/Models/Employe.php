<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_poste',
        'nom',
        'prenom',
        'email',
        'img',
        'contact',
        'matriculation',
        'status',
    ];

    
}
