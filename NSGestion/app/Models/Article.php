<?php

namespace App\Models;

use App\Models\TypeArticle;
use App\Models\ProprieteArticle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $guareded = [];
    use HasFactory;

    public function typeArticle()
    {
        return $this->belongsTo(TypeArticle::class);
    }

    public function propietes()
    {
        return $this->belongsToMany(ProprieteArticle::class,"article_propriete","article_id","propriete_id");
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class,"article_location","article_id","location_id");
    }
}
