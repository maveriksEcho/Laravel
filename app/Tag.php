<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    //
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40), '-');
    }

    // Mass assigned
    protected $guarded = [];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
