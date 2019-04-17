<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor_movie extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
