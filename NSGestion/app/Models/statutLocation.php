<?php

namespace App\Models;

use phpDocumentor\Reflection\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class statutLocation extends Model
{
    use HasFactory;

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
