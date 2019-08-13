<?php

namespace App\Models\Backend\Fees;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $primaryKey = 'fee_id';
    public $timestamps = false;

    public function user(){
        // return $this->hasOne('App/Models/Backend/UserManagement/User');
        return $this->belongsTo('App\Models\Backend\UserManagement\User');
    }

    public function officer() {
        return $this->belongsTo('App\Models\Backend\UserManagement\User', 'officer_id');
    }

    public function feetype() {
        return $this->belongsTo('App\Models\Backend\Fees\Feetype', 'feetype_id');
    }

    public function class() {
        return $this->belongsTo('App\Models\Backend\Classes\MyClass', 'class_id');
    }
}
