<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $fillable = [
        'pageName', 'pageUrl', 'user_id'
    ];


    /**
     * 
     * Get the institution record associated with the grade.
     * 
    */
 
   public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function investigations()
    {
        return $this->hasMany('App\Investigation');
    }
}
