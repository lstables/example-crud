<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $guarded = ['id'];

    /**
     * Set Car Name attribute Mutator.
     * @param $value
     */
    public function setCarNameAttribute($value)
    {
        $this->attributes['car_name'] = ucwords($value);
    }



}
