<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
    protected $fillable = ['naziv'];//$guarded ako nesto ne zelimo
}
