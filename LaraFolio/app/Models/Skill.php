<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
