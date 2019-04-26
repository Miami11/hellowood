<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_movie extends Model
{
    protected $table = 'category_movie';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
