<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;
 
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40), '-');
    }

    // Mass assigned
    protected $fillable = ['title' , 'slug' ,'description_short' ,'description' ,'image' ,'meta_title' , 'meta_description' ,'meta_keywords' ,'published' ,'viewed' ,'created_by','modified_by'];


    // Polymorphic relation with categories
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
