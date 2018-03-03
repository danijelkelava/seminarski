<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getTasks()
    {
    	return App\Task::all();
    }
}
