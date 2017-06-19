<?php

namespace App\Modules\Admin\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    
	public function getFullnameAttribute()
    {

        return sprintf('%s %s', $this->firstname, $this->lastname);
    
    }

}
