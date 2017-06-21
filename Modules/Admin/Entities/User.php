<?php

namespace Modules\Admin\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	
    protected $fillable = [];


    public function getFullnameAttribute()
    {

        return sprintf('%s %s', $this->firstname, $this->lastname);
    
    }

}
