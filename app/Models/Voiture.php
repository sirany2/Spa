<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = [
        'id', 'nom','marque','date','subject','email','message','name',
    ];
}
