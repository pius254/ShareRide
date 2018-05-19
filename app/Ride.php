<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'origin', 'destination', 'capacity'
    ];

    public $timestamps = true;

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
