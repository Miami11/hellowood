<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function members()
    {
        return $this->belongsTo(Member::class,'member_id');
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class,'movie_id');
    }
}
