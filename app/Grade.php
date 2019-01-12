<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Grade extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $fillable = [
        'gradeName', 'gradeInstitution', 'gradeyear', 'user_id'
    ];


    /**
     * 
     * Get the institution record associated with the grade.
     * 
    */
    public function institution()
    {
    	return $this->hasMany(Institution::class);
    }
   public function user()
    {
        return $this->belongsTo('App\User');
    }
}
