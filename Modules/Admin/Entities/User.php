<?php

namespace Modules\Admin\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	
    protected $fillable = [];
    

    public function getPermissionsAttribute()
    {

    	return $this->role->permissions;

    }


    public function hasAccess(array $permissions)
    {

    	if ($this->role->id == 1)
    		return true;

    	foreach ($permissions as $permission) {

			if (!$this->permissions->contains(Permission::where('slug', $permission)->firstOrFail()))
				return false;

    	}

    	return true;

    }


    public function role()
    {

        return $this->belongsTo(Role::class);
    
    }

}
