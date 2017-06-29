<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [];


    public function permissions()
    {

    	return $this->belongsToMany(Permission::class, 'permissions_roles');

    }


    public function users()
    {

        return $this->hasMany(Role::class);
    
    }

}
