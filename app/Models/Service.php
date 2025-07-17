<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }
}
