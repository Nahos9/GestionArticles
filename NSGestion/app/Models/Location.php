<?php

namespace App\Models;

use App\Models\Article;
use App\Models\statutLocation;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->belongsToMany(Article::class,"article_location","location_id","article_id");
    }

    public function statutLocation()
    {
        return $this->belongsTo(statutLocation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
