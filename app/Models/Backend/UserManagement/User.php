<?php

namespace App\Models\Backend\UserManagement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['role_id','class','name', 'reg_number','code','password','gender','cover_image','date_of_birth','date_of_join','relative_name','email', 'phone','occupation'];
    
    public function role() {
        return $this->belongsTo('App\Models\Backend\UserManagement\Role');
    }

    public function roles()
    {
        // return $this->hasOne('App\Models\Backend\UserManagement\Role');
        // return $this->belongsToMany(Role::class);
        return $this->belongsToMany('App\Models\Backend\UserManagement\Role');
    }

    public function class()
    {
        return $this->hasOne('App\Models\Backend\Classes\MyClass','class_id');
    }


    public function isAdmin() {
        if($this->role->name == 'Administrator') {
            return true;
        }
        return false;
    }
}
