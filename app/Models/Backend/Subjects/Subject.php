<?php

namespace App\Models\Backend\Subjects;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject_code', 'subject_name','subject_teacher','subject_book'];
    protected $primaryKey = 'subject_id';
    public $timestamps = false;
}
