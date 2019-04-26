<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_movie');
    }

    public function countries()
    {
        return $this->belongsTo(Country::class,'country_id');
    }

    public function rank()
    {
        return $this->hasMany(Rank::class);
    }
}
