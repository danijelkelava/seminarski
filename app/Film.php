<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['naslov', 'id_zanr', 'godina', 'trajanje', 'slika'];
}
