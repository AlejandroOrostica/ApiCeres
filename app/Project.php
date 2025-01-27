<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'projectName', 'memberName','projectInit', 'projectEnd', 'projectDescription','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

  
}
