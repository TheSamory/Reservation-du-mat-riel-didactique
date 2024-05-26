<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'ecole',
        'filiere',
        'phone',
        'cni',
        'email',
        'password'
        
        
       ];
}