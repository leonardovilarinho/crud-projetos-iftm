<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'name',
    	'language',
    	'author',
    	'price',
    	'created_at',
    	'updated_at',
    ];
}
