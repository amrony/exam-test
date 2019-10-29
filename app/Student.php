<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'number', 'blood_group', 'address', 'is_approve', 'user_id'];
}
