<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $fillable = [
        'investigationsNumber', 'investigationsPerYear', 'authorsPerInvestigation', 'mostRevelevantPage', 'mostUnusedPage', 'user_id'
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
   
}
