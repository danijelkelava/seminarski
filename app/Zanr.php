<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'naziv'
    ];//$guarded ako nesto ne zelimo
}
