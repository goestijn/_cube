<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [];


    public function permissions()
    {

    	return $this->hasMany(Permission::class);

    }


    public function users()
    {

        return $this->hasMany(User::class);
    
    }

}
