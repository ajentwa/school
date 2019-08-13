<?php

namespace App\Models\Backend\Fees;

use Illuminate\Database\Eloquent\Model;

class Feetype extends Model
{
    protected $table = 'feetypes';
    protected $fillable = ['feetype_id,name'];
    protected $primaryKey = 'feetype_id';
    public $timestamps = false;
}
