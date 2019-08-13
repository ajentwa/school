<?php

namespace App\Models\Backend\Classes;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    protected $table = 'classes';
    protected $fillable = ['class_name', 'class_teacher','class_students'];
    protected $primaryKey = 'class_id';
    // public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\Models\Backend\UserManagement\User','id');
    }
}
