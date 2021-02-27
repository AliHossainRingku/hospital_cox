<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['doctor_name', 'department_id', 'doctor_description', 'doctor_designation', 'doctor_image', 'publication_status'];
}
