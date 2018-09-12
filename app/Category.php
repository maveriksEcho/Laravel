<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40), '-');
    }
    // Mass assigned
    protected $fillable = ['title' , 'slug' , 'parent_id', 'published', 'created_by', 'modified_by'];

    // Get children category
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
