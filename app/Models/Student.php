<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
           'stu_name',
           'stu_reg_no',
           'stu_address',
           'stu_age',
           'stu_grade',
           'stu_image',
           'stu_gender',
           'stu_prefered_grade'
    ];
}
