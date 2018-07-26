<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    // Mass assigned
    protected $guarded = [];

    public function posts()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
