<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $fillable = [
                'investigationName', 'investigationYear', 'investigationAuthors', 'page_id'
    ];


    /**
     * 
     * Get the institution record associated with the grade.
     * 
    */
 
   public function page()
    {
        return $this->belongsTo('App\Page');
    }

    
}
