<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    protected $fillable = [
       
        'categorie',
        'reference',
        'commentaire',
        'file_name'
       ];
}