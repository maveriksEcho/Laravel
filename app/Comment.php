<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    // Mass assigned
    protected $fillable = ['content' , 'parent_id' ,'post_id' ,'published' ,'created_by' ,'modified_by'];

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
