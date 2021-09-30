<?php

namespace App\Models;

use App\Models\TypeArticle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProprieteArticle extends Model
{
    use HasFactory;

    public function typeArticle()
    {
        return $this->belongsTo(TypeArticle::class);
    }
}
